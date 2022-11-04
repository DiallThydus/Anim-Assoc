<?php

namespace App\Entities;

use Carbon\Carbon;
use jsonSerialize;

class Animal implements JsonSerializable{

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
     * Animal's color.x
     *
     * @var array
     */
    private array $color;

    /**
     * Animal's sex.
     *male/female
     * @var boolean
     */
    private bool $sex;

    /**
     * Animal's species.
     *
     * @var string
     */
    private string $species;//race

    /**
     * Animal's adopted.
     *yes/no
     * @var boolean
     */
    private bool $adopted;

   /**
     * Animal's creation date.
     * datetime NULLABLE default NULL
     * @var Carbon $created_at
     */
    private Carbon $created_at;

     /**
     * Animal's update date.
     * datetime NULLABLE default NULL
     * @var Carbon $updated_at
     */
    private Carbon $updated_at;


    //name
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
        $this->name=$name;
        return $this;
    }

    //age
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
        $this->age=$age;
        return $this;
    }

    //color
    /**
     * Get Animal's color.
     *
     * @return array
     */
    public function getColor(): array
    {
        return implode(" ", $this->color);
    }

    /**
     * Set Animal's color.
     *
     * @param array $color
     * @return Animal
     */
    public function setColor(array $color): self
    {
        $this->color=$color;
        return $this;
    }

    //sex
    /**
     * Get Animal's sex.
     *
     * @return boolean
     */
    public function getSex(): bool
    {
        return $this->sex;
    }

    /**
     * Set Animal's sex.
     *
     * @param boolean $sex
     * @return Animal
     */
    public function setSex(bool $sex): self
    {
        $this->sex=$sex;
        return $this;
    }

    //species
    /**
     * Get Animal's species.
     *
     * @return string
     */
    public function getSpecies(): string 
    {
        return $this->species;
    }
    
    /**
     * Set Animal's species.
     *
     * @param string $species
     * @return Animal
     */
    public function setSpecies(string $species): self 
    {
        $this->species=$species;
        return $this;
    }

    //adopted
    /**
     * Get Animal's adopted.
     *
     * @return boolean
     */
    public function getAdopted(): bool 
    {
        return $this->adopted;
    }
    
    /**
     * Set Animal's adopted.
     *
     * @param boolean $adopted
     * @return Animal
     */
    public function setAdopted(bool $adopted): self 
    {
        $this->adopted=$adopted;
        return $this;
    }

    //carbon created(ts)
     /**
     * Get Animal's creation date.
     *
     * @return Carbon
     */
    public function getCreated_at(): Carbon
    {
        return $this->created_at;
    }

    /**
     * Set Animal's creation date.
     *
     * @param Carbon $created_at
     * @return Animal
     */
    public function setCreated_at(Carbon $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    //carbon update(ts)
   /**
     * Get animal update date.
     *
     * @return Carbon
     */
    public function getUpdated_at(): Carbon
    {
        return $this->updated_at;
    }

    /**
     * Set animal update date.
     *
     * @param Carbon $updated_at
     * @return Animal
     */
    public function setUpdated_at(Carbon $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

     //Json
     public function jsonSerialize(): array
     {
         return [
             'name' => $this->getName(),
             'age' => $this->getAge(),
             'sex' => $this->getSex(),
             'species' => $this->getSpecies(),
             'adopted' => $this->getAdopted(),
             'created_at' => $this->getCreated_at(),
             'updated_at' => $this->getUpdated_at(),
         ];
     }
}
