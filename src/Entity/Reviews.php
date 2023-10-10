<?php

namespace App\Entity;

use App\Repository\ReviewsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewsRepository::class)]
class Reviews
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 120)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $comment = null;

    #[ORM\Column]
    private ?int $rate = null;

    #[ORM\ManyToOne(targetEntity: Recipes::class, inversedBy: 'steps')]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Recipes $recipes = null;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'steps')]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Users $users = null;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->recipes = new ArrayCollection();
    }

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

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): static
    {
        $this->rate = $rate;

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

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $user): static
    {
        $this->users = $user;

        return $this;
    }
}
