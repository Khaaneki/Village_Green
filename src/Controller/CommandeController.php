<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Entity\Commande;
use App\Entity\SeComposeDe;
use App\Form\CommandeFormType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande', name: 'app_commande_')]
class CommandeController extends AbstractController
{
    #[Route('/ajout', name: 'ajout')]
    public function index(SessionInterface $session, ArticleRepository $articleRepository, Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $panier = $session->get('panier', []);

        if (empty($panier)) {
            $this->addFlash('alert alert-warning', 'Votre panier est vide');
            return $this->redirectToRoute('app_Accueil');
        }

        $utilisateur = $this->getUser();
        
        if (!$utilisateur instanceof Utilisateur) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        $reduction = $utilisateur->getReduction();
        
        $commande = new Commande();
        $form = $this->createForm(CommandeFormType::class, $commande);
        $form->handleRequest($request);

        $data = [];
        $totalHT = 0;

        foreach ($panier as $id => $quantité) {
            $article = $articleRepository->find($id);
            $data[] = [
                'article' => $article,
                'quantité' => $quantité,
            ];
            $totalHT += $article->getPrixHT() * $quantité;
        }

        $totalHT -= $reduction;

        $tva = 20.00;
        $totalTTC = $totalHT * (1 + $tva / 100);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si est pas vide on crée la commande
            $commande->setUtilisateur($utilisateur);
            $commande->setDateCommande(new \DateTime());
            $commande->setIdFacture(random_int(1, 1000000));
            $commande->setEtatFacture('Payer');
            $commande->setEtatLivraison('En attente');
            $commande->setTVA($tva);
            $commande->setMontantHT($totalHT);
            $commande->setMontantTTC($totalTTC);

            // Vérification du formulaire
            $adresseFacturation = $form->get('adresse_facturation')->getData();
            $villeFacturation = $form->get('ville_facturation')->getData();
            $telephoneFacturation = $form->get('telephone_facturation')->getData();
            $mailFacturation = $form->get('mail_facturation')->getData();
            $adresseLivraison = $form->get('adresse_livraison')->getData();
            
            if ($adresseFacturation === null || $villeFacturation === null || $telephoneFacturation === null || $mailFacturation === null || $adresseLivraison === null) {
                $this->addFlash('alert alert-danger', 'Tous les champs doivent être remplis.');
                return $this->redirectToRoute('app_commande_ajout');
            }

            $commande->setAdresseFacturation($adresseFacturation);
            $commande->setVilleFacturation($villeFacturation);
            $commande->setTelephoneFacturation($telephoneFacturation);
            $commande->setMailFacturation($mailFacturation);
            $commande->setAdresseLivraison($adresseLivraison);

            foreach ($panier as $item => $quantité) {
                $seComposeDe = new SeComposeDe();
                $article = $articleRepository->find($item);
                $seComposeDe->setIdArticle($article);
                $seComposeDe->setQuantité($quantité);
                $commande->addSeComposeDe($seComposeDe);
            }

            $em->persist($commande);
            $em->flush();
            $session->remove('panier');

            $this->addFlash('alert alert-success', 'Commande prise en compte');
            return $this->redirectToRoute('app_Accueil');
        }

        return $this->render('commande/commande.html.twig', [
            'form' => $form->createView(),
            'panier' => $data,
            'total' => $totalHT,
            'reduction' => $reduction,
        ]);
    }
}
