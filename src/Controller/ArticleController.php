<?php


namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{sous_rubrique_id}', name: 'app_article', methods: ['GET'])]
    public function index(int $sous_rubrique_id, ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findBy(['sous_rubrique' => $sous_rubrique_id]);

        return $this->render('article/article.html.twig', [
            'controller_name' => 'ArticleController',
            'articles' => $articles,
        ]);
    }
}