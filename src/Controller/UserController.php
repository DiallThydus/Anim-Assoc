<?php
namespace App\Controller;

use App\Model\UserModel;
use Exception;

class UserController{

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
    public function index(): string|bool
    {
        try{
            return json_encode($this->model->findAll());
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
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

        $this->render("category/show", [
            'category' => $category
        ]);
    }
}