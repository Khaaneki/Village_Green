<?php

namespace App\Entity;

use App\Repository\SeComposeDeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeComposeDeRepository::class)]
class SeComposeDe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantité = null;

    #[ORM\ManyToOne]
    private ?Commande $commande = null;

    #[ORM\ManyToOne(inversedBy: 'ComposeDe')]
    private ?Article $article = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantité(): ?int
    {
        return $this->quantité;
    }

    public function setQuantité(int $quantité): static
    {
        $this->quantité = $quantité;

        return $this;
    }

    public function getIdCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setIdCommande(?Commande $commande): static
    {
        $this->commande = $commande;

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
}
