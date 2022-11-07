<?php

namespace App\Entities;

use Carbon\Carbon;

use Core\Entity\DefaultEntity;

class Animal extends DefaultEntity
{

    /**
     * Animal's id
     * PRIMARY KEY UNSIGNED NOT NULLABLE
     *
     * @var integer $id
     */
    private int $id;

    /**
     * Animal's name.
     *
     * @var string
     */
    private string $name;

    /**
     * Animal's age.
     *
     * @var integer
     */
    private int $age;

    /**
     * Animal's color.
     *
     * @var string
     */
    private string $colors;

    /**
     * Animal's sex.
     *male/female
     * @var boolean
     */
    private bool $sexe;

    /**
     * Animal's species.
     *
     * @var string
     */
    private string $race;

    /**
     * Animal's category.
     *
     * @var int
     */
    private int $category_id;

    /**
     * Animal's creation date.
     *
     * @var string|null
     */
    private string|null $date_creation;

    /**
     * Animal's updating date.
     *
     * @var string|null
     */
    private string|null $date_updated;

    /**
     * Animal's adopted.
     *yes/no
     * @var int
     */
    private int $is_adopted;

    /**
     * Animal's picture.
     *
     * @var string
     */
    private string $pictures;

    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }

    /**
     * Get the value of id
     *
     * @return int|null
     */
    public function getId(): int|null
    {
        return $this->id ?? null;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Animal's name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Animal's name.
     *
     * @param string $name
     * @return Animal
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Animal's age.
     *
     * @return integer
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set Animal's age.
     *
     * @param integer $age
     * @return Animal
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get Animal's color.
     *
     * @return string
     */
    public function getColors(): string
    {
        return $this->colors;
    }

    /**
     * Set Animal's color.
     *
     * @param string $colors
     * @return Animal
     */
    public function setColors(string $colors): self
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * Get Animal's sex.
     *
     * @return int
     */
    public function getSexe(): int
    {
        return $this->sexe;
    }

    /**
     * Set Animal's sex.
     *
     * @param int $sexe
     * @return Animal
     */
    public function setSexe(int $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get Animal's species.
     *
     * @return string
     */
    public function getRace(): string
    {
        return $this->race;
    }

    /**
     * Set Animal's species.
     *
     * @param string $race
     * @return Animal
     */
    public function setRace(string $race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get Animal's category.
     *
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * Set Animal's category.
     *
     * @param int $category_id
     * @return Animal
     */
    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Get Animal's adopted.
     *
     * @return int
     */
    public function getIsAdopted(): int
    {
        return $this->is_adopted;
    }

    /**
     * Set Animal's adopted.
     *
     * @param int $is_adopted
     * @return Animal
     */
    public function setIsAdopted(int $is_adopted): self
    {
        $this->is_adopted = $is_adopted;

        return $this;
    }

    /**
     * Get Animal's creation date.
     *
     * @return string|null
     */
    public function getDateCreation(): string|null
    {
        return $this->date_creation;
    }

    /**
     * Set Animal's creation date.
     *
     * @param string|null $date_creation
     * @return Animal
     */
    public function setDateCreation(string|null $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Get animal update date.
     *
     * @return string|null
     */
    public function getDateUpdated(): string|null
    {
        return $this->date_updated;
    }

    /**
     * Set animal update date.
     *
     * @param string|null $date_updated
     * @return Animal
     */
    public function setDateUpdated(string|null $date_updated): self
    {
        $this->date_updated = $date_updated;

        return $this;
    }

    /**
     * Get Animal's picture.
     *
     * @return string
     */
    public function getPictures(): string
    {
        return $this->pictures;
    }

    /**
     * Set Animal's picture.
     *
     * @param string $pictures
     * @return Animal
     */
    public function setPictures(string $pictures): self
    {
        $this->pictures = $pictures;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId(),
            'name' => ucfirst($this->getName()),
            'age' => $this->getAge(),
            'colors' => $this->getColors(),
            'sexe' => $this->getSexe(),
            'race' => ucfirst($this->getRace()),
            'category_id' => $this->getCategoryId(),
            'date_creation' => Carbon::parse($this->getDateCreation())->format('d/m/Y'),
            'date_updated' => Carbon::parse($this->getDateUpdated())->format('d/m/Y'),
            'is_adopted' => $this->getIsAdopted(),
            'pictures' => $this->getPictures(),
        ];
    }
}
