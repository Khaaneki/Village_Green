<?php

namespace App\Entity;

use App\Repository\BonLivraisonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BonLivraisonRepository::class)]
class BonLivraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_livraison = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_livreur = null;

    #[ORM\ManyToOne(inversedBy: 'commande')]
    private ?Commande $commande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->date_livraison;
    }

    public function setDateLivraison(\DateTimeInterface $date_livraison): static
    {
        $this->date_livraison = $date_livraison;

        return $this;
    }

    public function getNomLivreur(): ?string
    {
        return $this->nom_livreur;
    }

    public function setNomLivreur(string $nom_livreur): static
    {
        $this->nom_livreur = $nom_livreur;

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
}
