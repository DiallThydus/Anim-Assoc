<?php
namespace App\Models;

use Core\Model\DefaultModel;

/**
 * get animals
 * 
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class AnimalModel extends DefaultModel{
    
    protected string $table = 'animals';
    protected string $entity = 'Animal';

}