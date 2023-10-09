<?php

namespace App\Entity;

use App\Repository\AllergensRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AllergensRepository::class)]
class Allergens
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

    #[ORM\JoinTable(name: 'user_allergens')]
    #[ORM\JoinColumn(name: 'allergens_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'users_id', referencedColumnName: 'id')]
    #[ORM\ManyToMany(targetEntity: Users::class, mappedBy: 'allergens')]
    private Collection $users;

    #[ORM\JoinTable(name: 'allergen_recipes')]
    #[ORM\JoinColumn(name: 'allergens_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'recipes_id', referencedColumnName: 'id')]
    #[ORM\ManyToMany(targetEntity: Recipes::class, inversedBy: 'allergens')]
    private Collection $recipes;

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

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addAllergen($this);
        }

        return $this;
    }

    public function removeUser(Users $user): static
    {
        if ($this->users->removeElement($user)) {
            $user->removeAllergen($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Recipes>
     */
    public function getRecipes(): Collection
    {
        return $this->recipes;
    }

    public function addRecipe(Recipes $recipe): static
    {
        if (!$this->recipes->contains($recipe)) {
            $this->recipes->add($recipe);
        }

        return $this;
    }

    public function removeRecipe(Recipes $recipe): static
    {
        $this->recipes->removeElement($recipe);

        return $this;
    }
}
