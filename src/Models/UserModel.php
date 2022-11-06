<?php
namespace App\Models;

use App\Entities\User;
use Core\Model\DefaultModel;
use Exception;

/**
 * user model
 *
 * @method boolean delete(int $id)
 * @method array<object> findAll()
 * @method object find(int $id)
 * @method object findBy(string|int $params)
 */
class UserModel extends DefaultModel{
    
    protected string $table = 'users';
    protected string $entity = 'User';

    /**
     * Save a new user or update an old one
     *
     * @param User $user
     * @return string|false
     */
    public function save(User $user): string|false
    {
        try {
            if(\is_null($user->getId())){
                $stmt = "INSERT INTO " . $this->table . " (last_name, first_name, email, email_verified, password, address, zip_code, city, phone_number, role, donation, date_creation, date_updated) 
            VALUES (:lastname, :firstname, :email, :isemailverified, :password, :address, :zipcode, :city, :phonenumber, :role, :donation, :datecreation, :dateupdated)";

                $prepare = $this->pdo->prepare($stmt);
                $prepare->execute($user());

                return $this->pdo->lastInsertId();
            } else {
                $stmt = "UPDATE " . $this->table . " SET last_name = :lastname, first_name = :firstname, email = :email, email_verified = :isemailverified, password = :password, address = :address, zip_code = :zipcode, city = :city, phone_number = :phonenumber, role = :role, donation = :donation, date_updated = :dateupdated WHERE id = :id";

                $prepare = $this->pdo->prepare($stmt);
                $prepare->bindValue(':id', $user->getId(), \PDO::PARAM_INT);
                $prepare->bindValue(':lastname', $user->getLastName());
                $prepare->bindValue(':firstname', $user->getFirstName());
                $prepare->bindValue(':email', $user->getEmail());
                $prepare->bindValue(':isemailverified', $user->getIsEmailVerified(), \PDO::PARAM_BOOL);
                $prepare->bindValue(':password', $user->getPassword());
                $prepare->bindValue(':address', $user->getAddress());
                $prepare->bindValue(':zipcode', $user->getZipCode());
                $prepare->bindValue(':city', $user->getCity());
                $prepare->bindValue(':phonenumber', $user->getPhoneNumber());
                $prepare->bindValue(':role', $user->getRole());
                $prepare->bindValue(':donation', $user->getDonation(),\PDO::PARAM_INT);
                $prepare->bindValue(':dateupdated', $user->getDateUpdated());

                $prepare->execute();

                return $user->getId();
            }

        } catch (\PDOException $e) {
             return $e->getMessage()." -> line ".$e->getLine();
        }
    }

    /**
     * Retourne un objet en fonction d'un paramètre
     *
     * @param string $email
     * @return array|object
     * @throws Exception
     */
    public function findByEmail(string $email): array|object
    {
        $stmt = "SELECT * FROM " . $this->table . " WHERE email = '" . $email . "'";

        return $this->getData($stmt, true);
    }

    /**
     * Check user's credentials for login
     *
     * @param array $data
     * @return array|object|false
     * @throws Exception
     */
    public function authenticate(array $data): object|bool|array
    {
        $user = $this->findByEmail($data['email']);

        if($user){
            if(password_verify($data['password'], $user->getPassword())){
                return $user;
            }
        }

        return false;
    }

}