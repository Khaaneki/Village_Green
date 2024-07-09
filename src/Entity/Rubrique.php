<?php

namespace App\Entity;

use App\Repository\RubriqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RubriqueRepository::class)]
class Rubrique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $libelle_court = null;

    #[ORM\Column(length: 100)]
    private ?string $libelle = null;

    #[ORM\Column(length: 100)]
    private ?string $image = null;

    #[ORM\OneToMany(targetEntity: SousRubrique::class, mappedBy: 'rubrique')]
    private Collection $rubrique;

    public function __construct()
    {
        $this->rubrique = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCourt(): ?string
    {
        return $this->libelle_court;
    }

    public function setLibelleCourt(string $libelle_court): static
    {
        $this->libelle_court = $libelle_court;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, SousRubrique>
     */
    public function getIdRubrique(): Collection
    {
        return $this->rubrique;
    }

    public function addIdRubrique(SousRubrique $idRubrique): static
    {
        if (!$this->rubrique->contains($idRubrique)) {
            $this->rubrique->add($idRubrique);
            $idRubrique->setIdRubrique($this);
        }

        return $this;
    }

    public function removeIdRubrique(SousRubrique $idRubrique): static
    {
        if ($this->rubrique->removeElement($idRubrique)) {
            // set the owning side to null (unless already changed)
            if ($idRubrique->getIdRubrique() === $this) {
                $idRubrique->setIdRubrique(null);
            }
        }

        return $this;
    }
}
