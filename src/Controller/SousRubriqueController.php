<?php


namespace App\Controller;

use App\Repository\SousRubriqueRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SousRubriqueController extends AbstractController
{
    #[Route('/sousRubrique/{Id_rubrique}', name: 'app_sous_rubrique', methods: ['GET'])]
    public function index(int $Id_rubrique, SousRubriqueRepository $sousRubriqueRepository): Response
    {
        $sousRubriques = $sousRubriqueRepository->findBy(['rubrique' => $Id_rubrique]);

        return $this->render('sousRubrique/sousRubrique.html.twig', [
            'controller_name' => 'SousRubriqueController',
            'sousRubriques' => $sousRubriques,
        ]);
    }
}