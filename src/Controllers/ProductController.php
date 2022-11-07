<?php

namespace App\Controllers;

use App\Entities\Product;
use App\Models\ProductModel;
use Core\Controller\DefaultController;

class ProductController extends DefaultController
{
    protected mixed $model = ProductModel::class;

    protected mixed $entity = Product::class;
}