<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite_livre = null;

    #[ORM\ManyToOne]
    private ?Article $article = null;

    #[ORM\ManyToOne]
    private ?BonLivraison $livraison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteLivre(): ?int
    {
        return $this->quantite_livre;
    }

    public function setQuantiteLivre(int $quantite_livre): static
    {
        $this->quantite_livre = $quantite_livre;

        return $this;
    }

    public function getIdArticle(): ?Article
    {
        return $this->article;
    }

    public function setIdArticle(?Article $article): static
    {
        $this->article = $article;

        return $this;
    }

    public function getIdLivraison(): ?BonLivraison
    {
        return $this->livraison;
    }

    public function setIdLivraison(?BonLivraison $livraison): static
    {
        $this->livraison = $livraison;

        return $this;
    }
}
