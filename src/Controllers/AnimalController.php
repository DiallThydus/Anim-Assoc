<?php

namespace App\Controllers;

use App\Entities\Animal;
use App\Models\AnimalModel;
use Core\Controller\DefaultController;

class AnimalController extends DefaultController
{
    /**
     * Model animal variable
     *
     * @var mixed
     */
    protected mixed $model = AnimalModel::class;

    /**
     * Entity animal variable
     *
     * @var mixed
     */
    protected mixed $entity = Animal::class;
}