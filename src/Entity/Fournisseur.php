<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\Column(length: 20)]
    private ?string $numero_fournisseur = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 200)]
    private ?string $adresse = null;

    #[ORM\Column(length: 30)]
    private ?string $pays = null;

    #[ORM\Column(length: 50)]
    private ?string $ville = null;

    #[ORM\Column(length: 20)]
    private ?string $telephone = null;

    #[ORM\Column(length: 20)]
    private ?string $cp = null;

    /**
     * @var Collection<int, Fournit>
     */
    #[ORM\OneToMany(targetEntity: Fournit::class, mappedBy: 'numero_fournisseur')]
    private Collection $fournits;

    public function __construct()
    {
        $this->fournits = new ArrayCollection();
    }

    public function getNumeroFournisseur(): ?string
    {
        return $this->numero_fournisseur;
    }

    public function setNumeroFournisseur(string $numero_fournisseur): static
    {
        $this->numero_fournisseur = $numero_fournisseur;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->cp;
    }

    public function setCodePostal(string $cp): static
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * @return Collection<int, Fournit>
     */
    public function getFournits(): Collection
    {
        return $this->fournits;
    }

    public function addFournit(Fournit $fournit): static
    {
        if (!$this->fournits->contains($fournit)) {
            $this->fournits->add($fournit);
            $fournit->setNumeroFournisseur($this);
        }

        return $this;
    }

    public function removeFournit(Fournit $fournit): static
    {
        if ($this->fournits->removeElement($fournit)) {
            // set the owning side to null (unless already changed)
            if ($fournit->getNumeroFournisseur() === $this) {
                $fournit->setNumeroFournisseur(null);
            }
        }

        return $this;
    }
}