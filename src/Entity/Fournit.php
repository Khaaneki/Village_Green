<?php

namespace App\Entity;

use App\Repository\FournitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournitRepository::class)]
class Fournit
{
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Fournisseur::class)]
    #[ORM\JoinColumn(name: "numero_fournisseur", referencedColumnName: "numero_fournisseur")]
    private ?Fournisseur $numero_fournisseur = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'fournits')]
    private ?Article $article = null;


    public function getNumeroFournisseur(): ?Fournisseur
    {
        return $this->numero_fournisseur;
    }

    public function setNumeroFournisseur(?Fournisseur $numero_fournisseur): static
    {
        $this->numero_fournisseur = $numero_fournisseur;

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