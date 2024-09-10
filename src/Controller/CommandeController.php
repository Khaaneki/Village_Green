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
            $this->addFlash(' alert alert-warning', 'Votre panier est vide');
            return $this->redirectToRoute('app_Accueil');
        }

        $user = $this->getUser();
        
        if (!$user instanceof Utilisateur) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        // Récupérer la réduction de l'utilisateur
        $reduction = $user->getReduction();
        
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

        // Calcul du montant TTC
        $tva = 20.00; // TVA fixe de 20%
        $totalTTC = $totalHT * (1 + $tva / 100);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si le panier n'est pas vide, on creer la commande
            $commande->setIdUtilisateur($user);
            $commande->setDateCommande(new \DateTime());
            $commande->setIdFacture(random_int(1, 1000000));
            $commande->setEtatFacture('Payer');
            $commande->setEtatLivraison('En attente');
            $commande->setTVA($tva);
            $commande->setMontantHT($totalHT);
            $commande->setMontantTTC($totalTTC);
            $commande->setMoyenPaiement($form->get('moyen_paiement')->getData()); // on récupére le moyen de paiement
            $commande->setAdresseFacturation($form->get('adresse_facturation')->getData());
            $commande->setVilleFacturation($form->get('ville_facturation')->getData());
            $commande->setTelephoneFacturation($form->get('telephone_facturation')->getData());
            $commande->setMailFacturation($form->get('mail_facturation')->getData());
            $commande->setAdresseLivraison($form->get('adresse_livraison')->getData());

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

            $this->addFlash('message', 'Commande créée avec succès');
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
