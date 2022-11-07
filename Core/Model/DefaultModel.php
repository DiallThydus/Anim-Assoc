<?php
namespace Core\Model;

use Core\Database\Database;
use Exception;

class DefaultModel extends Database
{

    protected string $table;

    /**
     * Retourne un tableau d'éléments
     *
     * @return array<object>
     * @throws Exception
     */
    public function findAll(): array
    {
        $stmt = "SELECT * FROM " . $this->table;

        return $this->getData($stmt);
    }

    /**
     * Retourne un objet en fonction de son id
     *
     * @param integer $id
     * @return array|object
     * @throws Exception
     */
    public function find(int $id): array|object
    {
        $stmt = "SELECT * FROM " . $this->table . " WHERE id = " . $id;

        return $this->getData($stmt, true);
    }

    /**
     * Delete function
     *
     * @param integer $id
     * @return boolean
     */
    public function delete(int $id): bool
    {
        try {
            $stmt = "DELETE FROM " . $this->table . " WHERE id = :id";

            $prepare = $this->pdo->prepare($stmt);
            $prepare->bindValue(':id', $id, \PDO::PARAM_INT);
            $prepare->execute();

            return true;
        } catch (\PDOException $e) {
            return $e->getMessage() . " -> line " . $e->getLine();
        }
    }
}