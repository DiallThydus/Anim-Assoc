<?php
namespace App\Models;

use Core\Model\DefaultModel;

/**
 * get categories
 * 
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class CategoryModel extends DefaultModel{
    
    protected string $table = 'categories';
    protected string $entity = 'Category';

}