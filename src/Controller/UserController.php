<?php

namespace App\Controller;

use App\Model\UserModel;
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
     * User's
     *
     * @return string|false
     * @throws Exception
     */
    public function index(): void
    {
        header('Content-type:application/json;charset=utf-8');

        try {
            http_response_code(200);
            echo json_encode($this->model->findAll());
        } catch (Exception $e) {
            http_response_code($e->getCode());
            echo json_encode($e->getMessage());
        }
    }

    /**
     * Page affichant une catégorie en fonction de son id
     *
     * @return void
     * @throws Exception
     */
    public function show()
    {
        if (isset($_GET['id']) && is_int(intval($_GET['id']))) {
            $id = intval($_GET['id']);
        } else {
            throw new \UnexpectedValueException("L'id attendu doit être un integer!");
        }
        $category = $this->model->find($id);
    }
}
