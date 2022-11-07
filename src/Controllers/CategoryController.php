<?php

namespace App\Controllers;

use App\Entities\Category;
use App\Models\CategoryModel;
use Core\Controller\DefaultController;

class CategoryController extends DefaultController
{
    /**
     * Model category variable
     *
     * @var mixed
     */
    protected mixed $model = CategoryModel::class;

    /**
     * Entity category variable
     *
     * @var mixed
     */
    protected mixed $entity = Category::class;

}