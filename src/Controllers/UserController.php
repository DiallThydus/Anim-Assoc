<?php

namespace App\Controllers;

use App\Entities\User;
use App\Models\UserModel;
use App\Services\Responser;
use Carbon\Carbon;
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

    public function registerUser(): void
    {
        $carbon = Carbon::now();
        try {
            $user = (new User())->
            setLastName('Shadow')->
            setFirstName('Sun')->
            setEmail('dialldialldiall@gmail.com')->
            setIsEmailVerified('false')->
            setPassword('Pouet5678')->
            setAddress('1 rue du SQLITE')->
            setZipCode('78190')->
            setCity('Petaouchnock')->
            setPhoneNumber('0668068961')->
            setRole(0)->
            setDonation(50.50)->
            setDateCreation($carbon->toDateString())->
            setDateUpdated($carbon->toDateString());

            $this->model->save($user);
        } catch (Exception $e) {
            Responser::response([$e->getMessage()], $e->getCode());
        }
    }
}
