<?php

namespace App\Entities;

use Carbon\Carbon;
use Core\Entity\DefaultEntity;

class Product extends DefaultEntity
{
    /**
     * Product's id
     * PRIMARY KEY UNSIGNED NOT NULLABLE
     *
     * @var integer $id
     */
    private int $id;

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
    private string $info;

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
     * Product category.
     *
     * @var integer
     */
    private int $category_id;

    /**
     * Product creation date.
     * datetime NULLABLE default NULL
     * @var string $date_creation
     */
    private string $date_creation;

    /**
     * Product update date.
     * datetime NULLABLE default NULL
     * @var string $date_updated
     */
    private string $date_updated;

    /**
     * Product's image.
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
     */
    public function getId(): int|null
    {
        return $this->id ?? null;
    }

    /**
     * Set product's id.
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get product name.
     *
     * @return string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set product name.
     *
     * @param string $name
     * @return self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get product description.
     *
     * @return string
     */ 
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * Set product description.
     *
     * @param string $info
     * @return self
     */
    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get product price.
     *
     * @return float
     */ 
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set product price.
     *
     * @param float $price
     * @return self
     */ 
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get product quantity.
     *
     * @return integer
     */ 
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set product quantity.
     *
     * @param integer $quantity
     * @return self
     */ 
    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get product category.
     *
     * @return integer
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * Set product category.
     *
     * @param integer $category_id
     * @return self
     */
    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Get product creation date.
     *
     * @return string
     */
    public function getDateCreation(): string
    {
        return $this->date_creation;
    }

    /**
     * Set the product creation date.
     *
     * @param string $date_creation
     * @return Product
     */
    public function setDateCreation(string $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Get product update date.
     *
     * @return string
     */
    public function getDateUpdated(): string
    {
        return $this->date_updated;
    }

    /**
     * Set product update date.
     *
     * @param string $date_updated
     * @return Product
     */
    public function setDateUpdated(string $date_updated): self
    {
        $this->date_updated = $date_updated;

        return $this;
    }

    /**
     * Get product's image.
     *
     * @return string
     */
    public function getPictures(): string
    {
        return $this->pictures;
    }

    /**
     * Set product's image.
     *
     * @param string $pictures
     * @return self
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
            'name' => $this->getName(),
            'info' => $this->getInfo(),
            'price' => $this->getPrice(),
            'quantity' => $this->getQuantity(),
            'category_id' => $this->getCategoryId(),
            'date_creation' => Carbon::parse($this->getDateCreation())->format('d/m/Y'),
            'date_updated' => Carbon::parse($this->getDateCreation())->format('d/m/Y'),
            'pictures' => $this->getPictures(),
        ];
    }
}