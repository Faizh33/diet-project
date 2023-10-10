<?php

namespace App\Entity;

use App\Repository\IngredientsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IngredientsRepository::class)]
class Ingredients
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $quantity = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $unity = null;

    #[ORM\ManyToOne(targetEntity: Recipes::class, inversedBy: 'ingredients')]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Recipes $recipes = null;    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getUnity(): ?string
    {
        return $this->unity;
    }

    public function setUnity(?string $unity): static
    {
        $this->unity = $unity;

        return $this;
    }

    public function getRecipes(): ?Recipes
    {
        return $this->recipes;
    }

    public function setRecipes(?Recipes $recipe): static
    {
        $this->recipes = $recipe;

        return $this;
    }
}
