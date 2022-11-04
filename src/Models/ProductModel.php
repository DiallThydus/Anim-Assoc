<?php
namespace App\Models;

use Core\Model\DefaultModel;

/**
 * get product
 * 
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class ProductModel extends DefaultModel{
    
    protected string $table = 'products';
    protected string $entity = 'Product';

}