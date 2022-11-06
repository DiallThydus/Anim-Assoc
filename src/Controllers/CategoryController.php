<?php

namespace App\Controllers;

use App\Entities\Category;
use Core\Controller\DefaultController;

class CategoryController extends DefaultController
{
    protected mixed $model = CategoryModel::class;

    protected mixed $entity = Category::class;
}