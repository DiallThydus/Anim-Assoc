<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Services\Responser;
use Exception;

class UserController
{

    private UserModel $model;

    /**
     * Instancie les objets dont on a besoin dans toutes nos méthodes
     */
    public function __construct()
    {
        $this->model = new UserModel;
    }

    /**
     * Users list
     *
     * @return void
     */
    public function index(): void
    {
        try {
            Responser::response($this->model->findAll());
        } catch (Exception $e) {
            Responser::response([$e->getMessage()], $e->getCode());
        }
    }

    /**
     * Show one user
     *
     * @return void
     */
    public function show(): void
    {
        try {
            if(! isset($_GET['id']) && ! is_int(intval($_GET['id']))){
                throw new \UnexpectedValueException("L'id attendu doit être un integer!", 500);
            }
            $id = intval($_GET['id']);
            Responser::response($this->model->find($id));
        } catch (Exception $e){
            Responser::response([$e->getMessage()], $e->getCode());
        }
    }
}
