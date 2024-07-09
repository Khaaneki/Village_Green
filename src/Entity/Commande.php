<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_commande = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 2)]
    private ?string $montant_HT = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 2)]
    private ?string $montant_TTC = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $TVA = null;

    #[ORM\Column]
    private ?int $id_facture = null;

    #[ORM\Column(length: 20)]
    private ?string $moyen_paiement = null;

    #[ORM\Column(length: 100)]
    private ?string $adresse_facturation = null;

    #[ORM\Column(length: 50)]
    private ?string $ville_facturation = null;

    #[ORM\Column(length: 20)]
    private ?string $telephone_facturation = null;

    #[ORM\Column(length: 50)]
    private ?string $mail_facturation = null;

    #[ORM\Column(length: 20)]
    private ?string $etat_facture = null;

    #[ORM\Column(length: 100)]
    private ?string $adresse_livraison = null;

    #[ORM\Column(length: 20)]
    private ?string $etat_livraison = null;

    #[ORM\OneToMany(targetEntity: BonLivraison::class, mappedBy: 'commande')]
    private Collection $commande;

    #[ORM\ManyToOne]
    private ?Utilisateur $utilisateur = null;

    public function __construct()
    {
        $this->commande = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->date_commande;
    }

    public function setDateCommande(\DateTimeInterface $date_commande): static
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getMontantHT(): ?string
    {
        return $this->montant_HT;
    }

    public function setMontantHT(string $montant_HT): static
    {
        $this->montant_HT = $montant_HT;

        return $this;
    }

    public function getMontantTTC(): ?string
    {
        return $this->montant_TTC;
    }

    public function setMontantTTC(string $montant_TTC): static
    {
        $this->montant_TTC = $montant_TTC;

        return $this;
    }

    public function getTVA(): ?string
    {
        return $this->TVA;
    }

    public function setTVA(string $TVA): static
    {
        $this->TVA = $TVA;

        return $this;
    }

    public function getIdFacture(): ?int
    {
        return $this->id_facture;
    }

    public function setIdFacture(int $id_facture): static
    {
        $this->id_facture = $id_facture;

        return $this;
    }

    public function getMoyenPaiement(): ?string
    {
        return $this->moyen_paiement;
    }

    public function setMoyenPaiement(string $moyen_paiement): static
    {
        $this->moyen_paiement = $moyen_paiement;

        return $this;
    }

    public function getAdresseFacturation(): ?string
    {
        return $this->adresse_facturation;
    }

    public function setAdresseFacturation(string $adresse_facturation): static
    {
        $this->adresse_facturation = $adresse_facturation;

        return $this;
    }

    public function getVilleFacturation(): ?string
    {
        return $this->ville_facturation;
    }

    public function setVilleFacturation(string $ville_facturation): static
    {
        $this->ville_facturation = $ville_facturation;

        return $this;
    }

    public function getTelephoneFacturation(): ?string
    {
        return $this->telephone_facturation;
    }

    public function setTelephoneFacturation(string $telephone_facturation): static
    {
        $this->telephone_facturation = $telephone_facturation;

        return $this;
    }

    public function getMailFacturation(): ?string
    {
        return $this->mail_facturation;
    }

    public function setMailFacturation(string $mail_facturation): static
    {
        $this->mail_facturation = $mail_facturation;

        return $this;
    }

    public function getEtatFacture(): ?string
    {
        return $this->etat_facture;
    }

    public function setEtatFacture(string $etat_facture): static
    {
        $this->etat_facture = $etat_facture;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresse_livraison;
    }

    public function setAdresseLivraison(string $adresse_livraison): static
    {
        $this->adresse_livraison = $adresse_livraison;

        return $this;
    }

    public function getEtatLivraison(): ?string
    {
        return $this->etat_livraison;
    }

    public function setEtatLivraison(string $etat_livraison): static
    {
        $this->etat_livraison = $etat_livraison;

        return $this;
    }

    /**
     * @return Collection<int, BonLivraison>
     */
    public function getIdCommande(): Collection
    {
        return $this->commande;
    }

    public function addIdCommande(BonLivraison $idCommande): static
    {
        if (!$this->commande->contains($idCommande)) {
            $this->commande->add($idCommande);
            $idCommande->setIdCommande($this);
        }

        return $this;
    }

    public function removeIdCommande(BonLivraison $idCommande): static
    {
        if ($this->commande->removeElement($idCommande)) {
            // set the owning side to null (unless already changed)
            if ($idCommande->getIdCommande() === $this) {
                $idCommande->setIdCommande(null);
            }
        }

        return $this;
    }

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;

}

}