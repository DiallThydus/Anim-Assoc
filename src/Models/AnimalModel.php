<?php
namespace App\Models;

use App\Entities\Animal;
use Core\Model\DefaultModel;

/**
 * get animals
 *
 * @method boolean delete(int $id)
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class AnimalModel extends DefaultModel{
    
    protected string $table = 'animals';
    protected string $entity = 'Animal';

    /**
     * Save a new user or update an old one
     *
     * @param Animal $animal
     * @return string|false
     */
    public function save(Animal $animal): string|false
    {
        try {
            if(\is_null($animal->getId())){
                $stmt = "INSERT INTO " . $this->table . " (name, age, colors, sexe, race, category_id, date_creation, date_updated, is_adopted, pictures)
                VALUES (:name, :age, :colors, :sexe, :race, :categoryid, :datecreation, :dateupdated, :isadopted, :pictures)";
                
                $prepare = $this->pdo->prepare($stmt);
                $prepare->execute($animal());

                return $this->pdo->lastInsertId();
            } else {
                $stmt = "UPDATE " . $this->table . " SET name = :name, age = :age, colors = :colors, sexe = :sexe, race = :race, category_id = :categoryid, date_updated = :dateupdated, is_adopted = :isadopted, pictures = :pictures WHERE id = :id";

                $prepare = $this->pdo->prepare($stmt);
                $prepare->bindValue(':id', $animal->getId(), \PDO::PARAM_INT);
                $prepare->bindValue(':name', $animal->getName());
                $prepare->bindValue(':age', $animal->getAge());
                $prepare->bindValue(':colors', $animal->getColors(), \PDO::PARAM_BOOL);
                $prepare->bindValue(':sexe', $animal->getSexe());
                $prepare->bindValue(':race', $animal->getRace());
                $prepare->bindValue(':categoryid', $animal->getCategoryId());
                $prepare->bindValue(':dateupdated', $animal->getDateUpdated());
                $prepare->bindValue(':is_adopted', $animal->getIsAdopted());
                $prepare->bindValue(':pictures', $animal->getPictures(),\PDO::PARAM_INT);

                $prepare->execute();

                return $animal->getId();
            }

        } catch (\PDOException $e) {
            return $e->getMessage()." -> line ".$e->getLine();
        }
    }
}