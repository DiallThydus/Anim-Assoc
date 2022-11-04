<?php

namespace App\Entities;

use Carbon\Carbon;
use JsonSerializable;

class Product implements JsonSerializable
{
    /**
     * Product name.
     *
     * @var string
     */
    private string $name;

    /**
     * Product description.
     *
     * @var string
     */
    private string $description;

    /**
     * Product price.
     *
     * @var float
     */
    private float $price;

    /**
     * Product quantity.
     *
     * @var integer
     */
    private int $quantity;

    /**
     * Product creation date.
     * datetime NULLABLE default NULL
     * @var Carbon $created_at
     */
    private Carbon $created_at;

    /**
     * Product update date.
     * datetime NULLABLE default NULL
     * @var Carbon $updated_at
     */
    private Carbon $updated_at;


    //name
    /**
     * Get product name.
     *
     * @return  string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set product name.
     *
     * @param  string  $name  Product name.
     *
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    //description
    /**
     * Get product description.
     *
     * @return  string
     */ 
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set product description.
     *
     * @param  string  $description  Product description.
     *
     * @return  self
     */ 
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    //price
    /**
     * Get product price.
     *
     * @return  float
     */ 
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set product price.
     *
     * @param  float  $price  Product price.
     *
     * @return  self
     */ 
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    //quantity
    /**
     * Get product quantity.
     *
     * @return  integer
     */ 
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set product quantity.
     *
     * @param  integer  $quantity  Product quantity.
     *
     * @return  self
     */ 
    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    //carbon
    /**
     * Get product creation date.
     *
     * @return Carbon
     */
    public function getCreated_at(): Carbon
    {
        return $this->created_at;
    }

    /**
     * Set the product creation date.
     *
     * @param Carbon $created_at
     * @return Product
     */
    public function setCreated_at(Carbon $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get product update date.
     *
     * @return Carbon
     */
    public function getUpdated_at(): Carbon
    {
        return $this->updated_at;
    }

    /**
     * Set product update date.
     *
     * @param Carbon $updated_at
     * @return Product
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
            'description' => $this->getDescription(),
            'price' => $this->getPrice(),
            'quantity' => $this->getQuantity(),
            'created_at' => $this->getCreated_at(),
            'updated_at' => $this->getUpdated_at(),
        ];
    }
}