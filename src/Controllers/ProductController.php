<?php

namespace App\Controllers;

use App\Entities\Product;
use App\Models\ProductModel;
use Core\Controller\DefaultController;

class ProductController extends DefaultController
{
    /**
     * Model product variable
     *
     * @var mixed
     */
    protected mixed $model = ProductModel::class;

    /**
     * Entity product variable
     *
     * @var mixed
     */
    protected mixed $entity = Product::class;
}