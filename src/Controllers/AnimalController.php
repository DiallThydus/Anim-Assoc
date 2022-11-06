<?php

namespace App\Controllers;

use App\Entities\Animal;
use Core\Controller\DefaultController;

class AnimalController extends DefaultController
{
    protected mixed $model = AnimalModel::class;

    protected mixed $entity = Animal::class;
}