<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="categorie", orphanRemoval=true)
     */
    private $articles;

    /**
     * @ORM\OneToMany(targetEntity=CategorySearch::class, mappedBy="categorie", orphanRemoval=true)
     */
    private $categorySearches;


    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->categorySearches = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getId().' - '.$this->getTitre();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setCategorie($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getCategorie() === $this) {
                $article->setCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CategorySearch[]
     */
    public function getCategorySearches(): Collection
    {
        return $this->categorySearches;
    }

    public function addCategorySearch(CategorySearch $categorySearch): self
    {
        if (!$this->categorySearches->contains($categorySearch)) {
            $this->categorySearches[] = $categorySearch;
            $categorySearch->setCategorie($this);
        }

        return $this;
    }

    public function removeCategorySearch(CategorySearch $categorySearch): self
    {
        if ($this->categorySearches->removeElement($categorySearch)) {
            // set the owning side to null (unless already changed)
            if ($categorySearch->getCategorie() === $this) {
                $categorySearch->setCategorie(null);
            }
        }

        return $this;
    }
}
