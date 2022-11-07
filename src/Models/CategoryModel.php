<?php
namespace App\Models;

use App\Entities\Category;
use Core\Model\DefaultModel;

/**
 * get categories
 *
 * @method boolean delete(int $id)
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class CategoryModel extends DefaultModel{
    
    protected string $table = 'categories';

    protected string $entity = 'Category';

    /**
     * Save a new user or update an old one
     *
     * @param Category $category
     * @return string|false
     */
    public function save(Category $category): string|false
{
        try {
            if(\is_null($category->getId())){
                $stmt = "INSERT INTO " . $this->table . " (name) VALUES (:name)";

                $prepare = $this->pdo->prepare($stmt);
                $prepare->execute($category());

                return $this->pdo->lastInsertId();
            } else {
                $stmt = "UPDATE " . $this->table . " SET name = :name WHERE id = :id";

                $prepare = $this->pdo->prepare($stmt);
                $prepare->bindValue(':id', $category->getId(), \PDO::PARAM_INT);
                $prepare->bindValue(':name', $category->getName());

                $prepare->execute();

                return $category->getId();
            }

        } catch (\PDOException $e) {
            return $e->getMessage()." -> line ".$e->getLine();
        }
    }
}