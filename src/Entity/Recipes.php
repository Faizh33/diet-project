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

    #[ORM\Column(type: Types::TEXT, length: 255)]
    private ?string $pictureName;

    #[ORM\OneToMany(mappedBy: 'recipes', targetEntity: Ingredients::class, cascade: ['persist'])]
    private Collection $ingredients;

    #[ORM\OneToMany(mappedBy: 'recipes', targetEntity: Steps::class, cascade: ['persist'])]
    private Collection $steps;

    #[ORM\OneToMany(mappedBy: 'recipes', targetEntity: Reviews::class, cascade: ['persist'])]
    private Collection $reviews;

    #[ORM\JoinTable(name: 'diet_recipes')]
    #[ORM\JoinColumn(name: 'recipes_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'diets_id', referencedColumnName: 'id')]
    #[ORM\ManyToMany(targetEntity: Diets::class, mappedBy: 'recipes')]
    private Collection $diets;

    #[ORM\JoinTable(name: 'allergen_recipes')]
    #[ORM\JoinColumn(name: 'recipes_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'allergens_id', referencedColumnName: 'id')]
    #[ORM\ManyToMany(targetEntity: Allergens::class, mappedBy: 'recipes')]
    private Collection $allergens;

    public function __construct()
    {
        $this->diets = new ArrayCollection();
        $this->allergens = new ArrayCollection();
        $this->ingredients = new ArrayCollection();
        $this->steps = new ArrayCollection();
        $this->reviews = new ArrayCollection();
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

    public function getpictureName(): ?string
    {
        return $this->pictureName;
    }

    public function setpictureName(?string $pictureName): static
    {
        $this->pictureName = $pictureName;

        return $this;
    }

    /**
     * @return Collection<int, Ingredients>
     */
    public function getIngredients(): Collection
    {
        return $this->ingredients;
    }
    
    public function addIngredient(Ingredients $ingredient): static
    {
        if (!$this->ingredients->contains($ingredient)) {
            $this->ingredients[] = $ingredient;
            $ingredient->setRecipes($this);
        }
    
        return $this;
    }
    
    public function removeIngredient(Ingredients $ingredient): static
    {
        if ($this->ingredients->removeElement($ingredient)) {
            $ingredient->setRecipes(null);
        }
    
        return $this;
    }
    
    /**
     * @return Collection<int, Steps>
     */
    public function getSteps(): Collection
    {
        return $this->steps;
    }
    
    public function addStep(Steps $step): static
    {
        if (!$this->steps->contains($step)) {
            $this->steps[] = $step;
            $step->setRecipes($this);
        }
    
        return $this;
    }
    
    public function removeStep(Steps $step): static
    {
        if ($this->steps->removeElement($step)) {
            $step->setRecipes(null);
        }
    
        return $this;
    }

    /**
     * @return Collection<int, Reviews>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }
    
    public function addReview(Reviews $review): static
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews[] = $review;
            $review->setRecipes($this);
        }
    
        return $this;
    }
    
    public function removeReview(Reviews $review): static
    {
        if ($this->reviews->removeElement($review)) {
            $review->setRecipes(null);
        }
    
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
