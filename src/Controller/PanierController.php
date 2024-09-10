<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

#[Route('/panier', name: 'panier_')]
class PanierController extends AbstractController
{
    #[Route('/', name:'index')]
    public function index(SessionInterface $session, ArticleRepository $articleRepository)
    {
        $panier = $session->get('panier', []);

        $data = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            $article = $articleRepository->find($id);

            if ($article) {
                $data[] = [
                    'article' => $article,
                    'quantite' => $quantite
                ];
                $total += $article->getPrixHT() * $quantite;
            }
        }

        return $this->render('panier/index.html.twig', compact('data', 'total'));
    }

    #[Route('/add/{id}', name:'add')]
    public function add(int $id, SessionInterface $session, ArticleRepository $articleRepository): RedirectResponse
    {
        $article = $articleRepository->find($id);

        if (!$article) {
            throw $this->createNotFoundException('L\'article n\'existe pas.');
        }

        $panier = $session->get('panier', []);

        if (empty($panier[$id])) {
            $panier[$id] = 1;
        } else {
            $panier[$id]++;
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_index');
    }

    #[Route('/remove/{id}', name:'remove')]
    public function remove(int $id, SessionInterface $session, ArticleRepository $articleRepository): RedirectResponse
    {
        $article = $articleRepository->find($id);

        if (!$article) {
            throw $this->createNotFoundException('L\'article n\'existe pas.');
        }

        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--;
            } else {
                unset($panier[$id]);
            }
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_index');
    }

    #[Route('/del/{id}', name:'del')]
    public function del(int $id, SessionInterface $session, ArticleRepository $articleRepository): RedirectResponse
    {
        $article = $articleRepository->find($id);

        if (!$article) {
            throw $this->createNotFoundException('L\'article n\'existe pas.');
        }

        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_index');
    }

    #[Route('/empty', name:'empty')]
    public function empty(SessionInterface $session): RedirectResponse
    {
        $session->remove('panier');

        return $this->redirectToRoute('panier_index');
    }
}