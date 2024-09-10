<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/articles/{sous_rubrique_id}', name: 'app_article', methods: ['GET'])]
    public function index(int $sous_rubrique_id, ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findBy(['sousRubrique' => $sous_rubrique_id]);

        return $this->render('article/article.html.twig', [
            'controller_name' => 'ArticleController',
            'articles' => $articles,
        ]);
    }

    #[Route('/article/{id}', name: 'app_view', methods: ['GET'])]
    public function show(int $id, ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find($id);
    
        return $this->render('article/view.html.twig', [
            'controller_name' => 'ArticleController',
            'article' => $article,
        ]);
    }
}