<?php
namespace Core\Model;

use Core\Database\Database;
use Exception;

class DefaultModel extends Database {

    protected string $table;

    /**
     * Retourne un tableau d'éléments
     *
     * @return array<object>
     * @throws Exception
     */
    public function findAll(): array
    {
        $stmt = "SELECT * FROM ". $this->table;

        return $this->getData($stmt);
    }

    /**
     * Retourne un objet en fonction de son id
     *
     * @param integer $id
     * @return object
     * @throws Exception
     */
    public function find(int $id): array|object
    {
        $stmt = "SELECT * FROM " . $this->table . " WHERE id = " .$id;
        return $this->getData($stmt, true);
    }
}