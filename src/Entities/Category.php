<?php

namespace App\Entities;

<<<<<<< HEAD
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

=======
use Core\Entity\DefaultEntity;
>>>>>>> be890885c70e022dc8bde357945920f564b6a1bb

class Category extends DefaultEntity
{
    /**
     * Category's id
     * PRIMARY KEY UNSIGNED NOT NULLABLE
     *
     * @var integer $id
     */
    private int $id;

    /**
     * The category's name.
     * string 255 NOT NULLABLE
     * @var string $name
     */
    private string $name;

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
     * Set the value of id
     *
     * @param int $id
     * @return  self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     * @return  self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'name' => ucfirst($this->getName()),
        ];
    }
}