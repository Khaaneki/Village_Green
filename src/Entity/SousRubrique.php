<?php

namespace App\Entity;

use App\Repository\SousRubriqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousRubriqueRepository::class)]
class SousRubrique
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

    #[ORM\OneToMany(targetEntity: Article::class, mappedBy: 'sous_rubrique')]
    private Collection $sous_rubrique;

    #[ORM\ManyToOne(inversedBy: 'rubrique')]
    private ?Rubrique $rubrique = null;

    public function __construct()
    {
        $this->sous_rubrique = new ArrayCollection();
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
     * @return Collection<int, Article>
     */
    public function getIdSousRubrique(): Collection
    {
        return $this->sous_rubrique;
    }

    public function addIdSousRubrique(Article $idSousRubrique): static
    {
        if (!$this->sous_rubrique->contains($idSousRubrique)) {
            $this->sous_rubrique->add($idSousRubrique);
            $idSousRubrique->setIdSousRubrique($this);
        }

        return $this;
    }

    public function removeIdSousRubrique(Article $idSousRubrique): static
    {
        if ($this->sous_rubrique->removeElement($idSousRubrique)) {
            // set the owning side to null (unless already changed)
            if ($idSousRubrique->getIdSousRubrique() === $this) {
                $idSousRubrique->setIdSousRubrique(null);
            }
        }

        return $this;
    }

    public function getIdRubrique(): ?Rubrique
    {
        return $this->rubrique;
    }

    public function setIdRubrique(?Rubrique $rubrique): static
    {
        $this->rubrique = $rubrique;

        return $this;
    }
}