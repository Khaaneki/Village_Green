<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use App\Repository\UtilisateurRepository;
use App\Security\UsersAuthenticator;
use App\Service\JWTService;
use App\Service\SendEmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UsersAuthenticator $authenticator, EntityManagerInterface $entityManager, SendEmailService $mail, JWTService $jwt): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // mdp hash
            $utilisateur->setMdp(
                $userPasswordHasher->hashPassword(
                    $utilisateur,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($utilisateur);
            $entityManager->flush();

            // header
            $header = [
                'type'=> 'JWT',
                'alg'=> 'HS256'
            ];

            // payload
            $payload = [
                'utilisateur_id' => $utilisateur->getId()
            ];

            // On genere le token
            $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));

            // Envoie mail
            $mail->send(
                'villageGreen@villageGreen.com',
                $utilisateur->getEmail(),
                'Activation de votre compte sur le site Village Green',
                'register',
                compact('utilisateur', 'token')
            );

            $this->addFlash('success', 'Utilisateur inscrit, veuillez cliquer sur le lien recu pour confirmer l\'adresse email');

            return $userAuthenticator->authenticateUser(
                $utilisateur,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('verif/{token}', name:'verify_utilisateur')]
    public function verifUser($token, JWTService $jwt, UtilisateurRepository $utilisateurRepo, EntityManagerInterface $manager): Response
    {
        // on verifie le token si valide 
        if ($jwt->isValid($token) && !$jwt->isExpired($token) && $jwt->check($token, $this->getParameter('app.jwtsecret'))) {

            // le token est valide on recupere les données
            $payload = $jwt->getPayload($token);

            // on recupere l'utilisateur
            $utilisateur = $utilisateurRepo->find($payload['utilisateur_id']);

            // On verifie l'utilisateur et pas deja actif
            if ($utilisateur && !$utilisateur->getIsVerified()) {
                $utilisateur->setIsVerified(true);
                $manager->flush();

                $this->addFlash('success', 'Votre compte a été activé');
                return $this->redirectToRoute('app_Accueil');
            }
        }

        $this->addFlash('danger', 'Le Lien est invalide ou a expiré');
        return $this->redirectToRoute('app_login');
    }
}