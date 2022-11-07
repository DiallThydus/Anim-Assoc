<?php
namespace App\Models;

use App\Entities\Product;
use Core\Model\DefaultModel;

/**
 * get product
 *
 * @method boolean delete(int $id)
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class ProductModel extends DefaultModel{
    
    protected string $table = 'products';
    protected string $entity = 'Product';

    /**
     * Save a new user or update an old one
     *
     * @param Product $category
     * @return string|false
     */
    public function save(Product $product): string|false
    {
        try {
            if(\is_null($product->getId())){
                $stmt = "INSERT INTO " . $this->table . " (name, info, price, quantity, category_id, date_creation, date_updated, pictures)) 
                VALUES (:name, :info, :price, :quantity, :categoryid, :datecreation, :dateupdated, :pictures)";
                $prepare = $this->pdo->prepare($stmt);
                $prepare->execute($product());

                return $this->pdo->lastInsertId();
            } else {
                $stmt = "UPDATE " . $this->table . " SET name = :name, info = :info, price = :price, quantity = :quantity, category_id = :categoryid, date_creation = :datecreation, date_updated = :dateupdated, pictures = :pictures WHERE id = :id";

                $prepare = $this->pdo->prepare($stmt);
                $prepare->bindValue(':id', $product->getId(), \PDO::PARAM_INT);
                $prepare->bindValue(':name', $product->getName());
                $prepare->bindValue(':info', $product->getInfo());
                $prepare->bindValue(':price', $product->getPrice());
                $prepare->bindValue(':quantity', $product->getQuantity());
                $prepare->bindValue(':categoryid', $product->getCategoryId());
                $prepare->bindValue(':datecreation', $product->getDateCreation());
                $prepare->bindValue(':dateupdated', $product->getDateUpdated());
                $prepare->bindValue(':pictures', $product->getPictures());

                $prepare->execute();

                return $product->getId();
            }

        } catch (\PDOException $e) {
            return $e->getMessage()." -> line ".$e->getLine();
        }
    }
}