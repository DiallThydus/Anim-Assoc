<?php

namespace App\Entities;

use Carbon\Carbon;

class Animals{

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
     * @return Animals
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
     * @return Animals
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
     * @return Animals
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
     * @return Animals
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
     * @return Animals
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
     * @return Animals
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
     * @return Animals
     */
    public function setCreated_at(Carbon $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    //carbon update(ts)
   /**
     * Get the user's update date.
     *
     * @return Carbon
     */
    public function getUpdated_at(): Carbon
    {
        return $this->updated_at;
    }

    /**
     * Set the user's update date.
     *
     * @param Carbon $updated_at
     * @return Animals
     */
    public function setUpdated_at(Carbon $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
