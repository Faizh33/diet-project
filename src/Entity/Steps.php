<?php

namespace App\Entity;

use App\Repository\StepsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StepsRepository::class)]
class Steps
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $orderNumber = null;

    #[ORM\ManyToOne(targetEntity: Recipes::class, inversedBy: 'steps')]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Recipes $recipes = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getOrderNumber(): ?int
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(int $orderNumber): static
    {
        $this->orderNumber = $orderNumber;

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
