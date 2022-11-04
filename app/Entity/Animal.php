<?php

namespace App\Entity;

use Carbon\Carbon;

class Animals{

    private string $name;
    private int $age;
    private array $color;
    private bool $sex;
    private string $species;//race
    private bool $adopted;
    //private int $picture_id;
    private Carbon $created_at;
    private Carbon $updated_at;

    //name
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name=$name;
    }

    //age
    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age=$age;
    }

    //color
    public function getColor(): array
    {
        return implode(" ", $this->color);
    }

    public function setColor(array $color): void
    {
        $this->color=$color;
    }

    //sex
    public function getSex(): bool
    {
        return $this->sex;
    }

    public function setSex(bool $sex): void 
    {
        $this->sex=$sex;
    }

    //species
    public function getSpecies(): string 
    {
        return $this->species;
    }
    
    public function setSpecies(string $species): void 
    {
        $this->species=$species;
    }

    //adopted
    public function getAdopted(): bool 
    {
        return $this->adopted;
    }
    
    public function setAdopted(bool $adopted): void 
    {
        $this->adopted=$adopted;
    }

    //carbon created(ts)
    public function getCreated_at(): Carbon
    {
        return $this->created_at;
    }

    public function setCreated_at(Carbon $created_at): void
    {
        $this->created_at = $created_at;
    }

    //carbon update(ts)
    public function getUpdated_at(): Carbon
    {
        return $this->updated_at;
    }

    public function setUpdated_at(Carbon $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
}
