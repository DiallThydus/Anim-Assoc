<?php
namespace App\Models;

use App\Entities\User;
use Core\Model\DefaultModel;

/**
 * get users
 * 
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class UserModel extends DefaultModel{
    
    protected string $table = 'users';
    protected string $entity = 'User';

    public function save(User $user): void
    {
        try {
            $stmt = "INSERT INTO " . $this->table . " (last_name, first_name, email, email_verified, password, address, zip_code, city, phone_number, role, donation, date_creation, date_updated) 
            VALUES (:lastname, :firstname, :email, :isemailverified, :password, :address, :zipcode, :city, :phonenumber, :role, :donation, :datecreation, :dateupdated)";

            $prepare = $this->pdo->prepare($stmt);
            $prepare->execute($user());
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}