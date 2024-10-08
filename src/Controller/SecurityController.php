<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\ResetPasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Repository\UtilisateurRepository;
use App\Service\SendEmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/oubli-pass', name: 'mdp_oublie')]
    public function motdepasseoublie(
        Request $request, 
        UtilisateurRepository $utilisateurRepository,
        TokenGeneratorInterface $tokenGenerator, 
        EntityManagerInterface $entityManager,
        SendEmailService $mail
    ): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // rechercher l'utilisateur par mail
            $utilisateur = $utilisateurRepository->findOneByEmail($form->get('email')->getData());

            // on verifie si on a un utilisateur
            if($utilisateur){
                // on genere un token de reinitialisation
                $token = $tokenGenerator->generateToken();
                $utilisateur->setResetToken($token);
                $entityManager->persist($utilisateur);
                $entityManager->flush();

                // on genere un lien de reinitialisation
                $url = $this->generateUrl('reset_pass', ['token' => $token],
                UrlGeneratorInterface::ABSOLUTE_URL);

                // on cree les données du mail
                $context = compact('url','utilisateur');

                // Envoie du mail
                $mail->send(
                    'no-reply@green.fr',
                    $utilisateur->getEmail(),
                    'Réinitialisation de mot de passe',
                    'password_reset',
                    $context
                );

                $this->addFlash('success', 'Email envoyé avec succès');
                return $this->redirectToRoute('app_login');
            }

            // $utilisateur est null
            $this->addFlash('danger', 'Un problème est survenu');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/reset_password_request.html.twig',[
            'requestPassForm' => $form->createView()
        ]);
    }

    #[Route('/oubli-pass/{token}', name:'reset_pass')]
    public function resetPass(
    string $token,
    Request $request,
    UtilisateurRepository $utilisateurRepository,
    EntityManagerInterface $entityManager,
    UserPasswordHasherInterface $passwordHasher
    ): Response
    {
        // On verifie si on a ce token dans la base
        $utilisateur = $utilisateurRepository->findOneByResetToken($token);
        
        
        if($utilisateur){
            $form = $this->createForm(ResetPasswordFormType::class);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                // on efface le token
                $utilisateur->setResetToken('');
                $utilisateur->setmdp(
                    $passwordHasher->hashPassword(
                        $utilisateur,
                        $form->get('password')->getData()
                    )
                );
                $entityManager->persist($utilisateur);
                $entityManager->flush();

                $this->addFlash('success', 'Mot de passe changé avec succès');
                return $this->redirectToRoute('app_login');
            }

            return $this->render('security/reset_password.html.twig', [
                'passForm' => $form->createView()
            ]);
        }
        $this->addFlash('danger', 'Jeton invalide');
        return $this->redirectToRoute('app_login');
    }
}