<?php

namespace App\Entity;

use App\Repository\StarterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StarterRepository::class)
 */
class Starter
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $allergen;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diet;

    /**
     * @ORM\Column(type="boolean")
     */
    private $homeMade;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAllergen(): ?string
    {
        return $this->allergen;
    }

    public function setAllergen(?string $allergen): self
    {
        $this->allergen = $allergen;

        return $this;
    }

    public function getDiet(): ?string
    {
        return $this->diet;
    }

    public function setDiet(?string $diet): self
    {
        $this->diet = $diet;

        return $this;
    }

    public function getHomeMade(): ?bool
    {
        return $this->homeMade;
    }

    public function setHomeMade(bool $homeMade): self
    {
        $this->homeMade = $homeMade;

        return $this;
    }
}
