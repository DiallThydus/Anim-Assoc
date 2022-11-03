<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * Model permettant de récupérer les catégories
 * 
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class UserModel extends DefaultModel{
    
    protected string $table = 'users';
    protected string $entity = 'User';

}