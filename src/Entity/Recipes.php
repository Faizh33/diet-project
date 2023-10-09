<?php

namespace App\Entity;

use App\Repository\RecipesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecipesRepository::class)]
class Recipes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $preparationTime = null;

    #[ORM\Column(nullable: true)]
    private ?int $breakTime = null;

    #[ORM\Column(nullable: true)]
    private ?int $cookingTime = null;

    #[ORM\ManyToOne(inversedBy: 'recipes')]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Ingredients $ingredients = null;

    #[ORM\ManyToOne(inversedBy: 'recipes')]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Steps $steps = null;

    #[ORM\ManyToOne(inversedBy: 'recipes')]
    #[ORM\JoinColumn(onDelete: "CASCADE")]
    private ?Reviews $reviews = null;

    #[ORM\JoinTable(name: 'diet_recipes')]
    #[ORM\JoinColumn(name: 'recipes_id', referencedColumnName: 'id', unique: true)]
    #[ORM\InverseJoinColumn(name: 'diets_id', referencedColumnName: 'id', unique: true)]
    #[ORM\ManyToMany(targetEntity: Diets::class, mappedBy: 'recipes')]
    private Collection $diets;

    #[ORM\JoinTable(name: 'allergen_recipes')]
    #[ORM\JoinColumn(name: 'recipes_id', referencedColumnName: 'id', unique: true)]
    #[ORM\InverseJoinColumn(name: 'allergens_id', referencedColumnName: 'id', unique: true)]
    #[ORM\ManyToMany(targetEntity: Allergens::class, mappedBy: 'recipes')]
    private Collection $allergens;

    public function __construct()
    {
        $this->diets = new ArrayCollection();
        $this->allergens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPreparationTime(): ?int
    {
        return $this->preparationTime;
    }

    public function setPreparationTime(?int $preparationTime): static
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    public function getBreakTime(): ?int
    {
        return $this->breakTime;
    }

    public function setBreakTime(?int $breakTime): static
    {
        $this->breakTime = $breakTime;

        return $this;
    }

    public function getCookingTime(): ?int
    {
        return $this->cookingTime;
    }

    public function setCookingTime(?int $cookingTime): static
    {
        $this->cookingTime = $cookingTime;

        return $this;
    }

    public function getIngredients(): ?Ingredients
    {
        return $this->ingredients;
    }

    public function setIngredients(?Ingredients $ingredients): static
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getSteps(): ?Steps
    {
        return $this->steps;
    }

    public function setSteps(?Steps $steps): static
    {
        $this->steps = $steps;

        return $this;
    }

    public function getReviews(): ?Reviews
    {
        return $this->reviews;
    }

    public function setReviews(?Reviews $reviews): static
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * @return Collection<int, Diets>
     */
    public function getDiets(): Collection
    {
        return $this->diets;
    }

    public function addDiet(Diets $diet): static
    {
        if (!$this->diets->contains($diet)) {
            $this->diets->add($diet);
            $diet->addRecipe($this);
        }

        return $this;
    }

    public function removeDiet(Diets $diet): static
    {
        if ($this->diets->removeElement($diet)) {
            $diet->removeRecipe($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Allergens>
     */
    public function getAllergens(): Collection
    {
        return $this->allergens;
    }

    public function addAllergen(Allergens $allergen): static
    {
        if (!$this->allergens->contains($allergen)) {
            $this->allergens->add($allergen);
            $allergen->addRecipe($this);
        }

        return $this;
    }

    public function removeAllergen(Allergens $allergen): static
    {
        if ($this->allergens->removeElement($allergen)) {
            $allergen->removeRecipe($this);
        }

        return $this;
    }
}
