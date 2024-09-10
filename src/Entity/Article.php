<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
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

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prixHT = null;

    #[ORM\ManyToOne(targetEntity: SousRubrique::class, inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SousRubrique $sousRubrique = null;

    #[ORM\OneToMany(targetEntity: Fournit::class, mappedBy: 'article')]
    private Collection $article;

    #[ORM\OneToMany(targetEntity: SeComposeDe::class, mappedBy: 'article')]
    private Collection $ComposeDe;

    public function __construct()
    {
        $this->article = new ArrayCollection();
        $this->ComposeDe = new ArrayCollection();
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

    public function getPrixHT(): ?string
    {
        return $this->prixHT;
    }

    public function setPrixHT(string $prixHT): static
    {
        $this->prixHT = $prixHT;

        return $this;
    }

    public function getSousRubrique(): ?SousRubrique
    {
        return $this->sousRubrique;
    }

    public function setSousRubrique(?SousRubrique $sousRubrique): static
    {
        $this->sousRubrique = $sousRubrique;
        return $this;
    }

    /**
     * @return Collection<int, Fournit>
     */
    public function getIdArticle(): Collection
    {
        return $this->article;
    }

    public function addIdArticle(Fournit $idArticle): static
    {
        if (!$this->article->contains($idArticle)) {
            $this->article->add($idArticle);
            $idArticle->setIdArticle($this);
        }

        return $this;
    }

    public function removeIdArticle(Fournit $idArticle): static
    {
        if ($this->article->removeElement($idArticle)) {
            // set the owning side to null (unless already changed)
            if ($idArticle->getIdArticle() === $this) {
                $idArticle->setIdArticle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SeComposeDe>
     */
    public function getComposeDe(): Collection
    {
        return $this->ComposeDe;
    }

    public function addComposeDe(SeComposeDe $composeDe): static
    {
        if (!$this->ComposeDe->contains($composeDe)) {
            $this->ComposeDe->add($composeDe);
            $composeDe->setIdArticle($this);
        }

        return $this;
    }

    public function removeComposeDe(SeComposeDe $composeDe): static
    {
        if ($this->ComposeDe->removeElement($composeDe)) {
            // set the owning side to null (unless already changed)
            if ($composeDe->getIdArticle() === $this) {
                $composeDe->setIdArticle(null);
            }
        }

        return $this;
    }
}
