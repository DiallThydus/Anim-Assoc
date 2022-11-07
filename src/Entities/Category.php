<?php

namespace App\Entities;

use Carbon\Carbon;
use jsonSerialize;

class Category implements JsonSerializable
{
    /**
     * Category id
     * PRIMARY KEY UNSIGNED NOT NULLABLE
     *
     * @var integer
     */
    private int $id;

    /**
     * Category name.
     *
     * @var string
     */
    private string $name;


    //id
    /**
     * Get PRIMARY KEY UNSIGNED NOT NULLABLE
     *
     * @return  integer
     */ 
    public function getId()
    {
        return $this->id;
    }

    //name
    /**
     * Get category name.
     *
     * @return  string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set category name.
     *
     * @param  string  $name  Category name.
     *
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    
    //Json
    public function jsonSerialize(): array
    {
        return ['name' => $this->getName()];
    }


}