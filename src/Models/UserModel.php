<?php
namespace App\Models;

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

}