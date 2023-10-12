<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $lastName = null;

    #[ORM\Column(length: 50)]
    private ?string $firstName = null;

    #[ORM\Column(length: 120)]
    private ?string $userName = null;

    #[ORM\Column(length: 50)]
    private ?string $password = null;    

    #[ORM\Column]
    private array $role = ['ROLE_USER'];

    #[ORM\OneToMany(mappedBy: 'users', targetEntity: Reviews::class, cascade: ['persist'])]
    private Collection $reviews;

    #[ORM\JoinTable(name: 'user_diets')]
    #[ORM\JoinColumn(name: 'users_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'diets_id', referencedColumnName: 'id')]
    #[ORM\ManyToMany(targetEntity: Diets::class, inversedBy: 'users')]
    private Collection $diets;

    #[ORM\JoinTable(name: 'user_allergens')]
    #[ORM\JoinColumn(name: 'users_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'allergens_id', referencedColumnName: 'id')]
    #[ORM\ManyToMany(targetEntity: Allergens::class, inversedBy: 'users')]
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

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): static
    {
        $this->userName = $userName;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): array
    {
        return $this->role;
    }

    public function setRole(array $role): static
    {
        $this->role = $role;

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
            $review->setUsers($this);
        }
    
        return $this;
    }
    
    public function removeReview(Reviews $review): static
    {
        if ($this->reviews->removeElement($review)) {
            $review->setUsers(null);
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
        }

        return $this;
    }

    public function removeDiet(Diets $diet): static
    {
        $this->diets->removeElement($diet);

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
        }

        return $this;
    }

    public function removeAllergen(Allergens $allergen): static
    {
        $this->allergens->removeElement($allergen);

        return $this;
    }
}
