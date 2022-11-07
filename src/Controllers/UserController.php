<?php

namespace App\Controllers;

use App\Entities\User;
use App\Models\UserModel;
use App\Services\Responser;
use Core\Controller\DefaultController;
use Exception;

class UserController extends DefaultController
{
    /**
     * Model user variable
     *
     * @var mixed
     */
    protected mixed $model = UserModel::class;

    /**
     * Entity user variable
     *
     * @var mixed
     */
    protected mixed $entity = User::class;

    /**
     * login function
     *
     * @return void
     */
    public function login(): void
    {
        try {
            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ];

            $user = $this->model->authenticate($data);

            if ($user) {
                Responser::response($user);
            } else {
                throw new Exception("L'utilisateur n'existe pas!", 404);
            }
        } catch (Exception $e) {
            Responser::response([$e->getMessage()], $e->getCode());
        }
    }

}
