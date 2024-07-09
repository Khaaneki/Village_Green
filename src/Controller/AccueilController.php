<?php


namespace App\Controller;

use App\Repository\RubriqueRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/Accueil', name: 'app_Accueil')]
    public function index(RubriqueRepository $RubriqueRepository): Response
    {
        $rubriques = $RubriqueRepository->findAll();

        return $this->render('Accueil/Accueil.html.twig', [
            'controller_name' => 'AccueilController',
            'rubriques' => $rubriques,
        ]);
    }
}
