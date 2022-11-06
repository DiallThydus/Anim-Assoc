<?php

namespace Core\Controller;

use App\Services\Responser;
use Carbon\Carbon;
use Exception;

class DefaultController
{
    protected mixed $model;

    protected mixed $entity;

    /**
     * Instancie les objets dont on a besoin dans toutes nos méthodes
     */
    public function __construct()
    {
        $this->model = new $this->model;
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
            if (!isset($_GET['id']) && !is_int(intval($_GET['id']))) {
                throw new \UnexpectedValueException("L'id attendu doit être un integer!", 500);
            }
            $id = intval($_GET['id']);
            Responser::response($this->model->find($id));
        } catch (Exception $e) {
            Responser::response([$e->getMessage()], $e->getCode());
        }
    }

    public function create(): void
    {
        $carbon = Carbon::now();
        try {
            if (!isset($_POST)) {
                throw new \UnexpectedValueException("La méthode utilisée doit etre POST!", 500);
            }

            $data = [];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }

            switch (substr($this->entity, 13)) {
                case 'User':
                    $data['isEmailVerified'] = 0;
                    $data['role'] = 0;
                    $data['donation'] = 0;
                    break;
                case 'Animal':
                    break;
                case 'Category':
                    break;
                case 'Product':
                    break;
                default:
                    throw new \UnexpectedValueException("L'entité n'existe pas!", 500);
            }

            $data['created_at'] = $carbon->toDateTimeString();
            $data['updated_at'] = NULL;
            $entityName = substr($this->entity, 13);
            $entityObj = new $this->entity($data);
            $newEntityId = $this->model->save($entityObj);
            Responser::response(['message' => $entityName . ' enregistré(é) avec succès!', 'id' => $newEntityId]);
        } catch (Exception $e) {
            Responser::response([$e->getMessage()], $e->getCode());
        }
    }

    public function update(): void
    {
        try {
            $data = [
                'id' => 1,
                'lastName' => 'SHADOW',
                'firstName' => 'SUN',
                'email' => 'TEST@TEST.COM',
                'isEmailVerified' => 1,
                'password' => 'POUET5678',
                'address' => '1 RUE DU SQLITE',
                'zipCode' => '78190',
                'city' => 'PETAOUCHNOCK',
                'phoneNumber' => '0668068961',
                'role' => 1,
                'donation' => 0,
                'dateUpdated' => Carbon::now()->toDateTimeString()
            ];
            $entityName = substr($this->entity, 13);
            $entityObj = new $this->entity($data);
            $newEntityId = $this->model->save($entityObj);
            Responser::response(['message' => $entityName . ' modifié(é) avec succès!', 'id' => $newEntityId]);
        } catch (Exception $e) {
            Responser::response([$e->getMessage()], $e->getCode());
        }
    }

    public function delete(): void
    {
        try {
            if (!isset($_GET['id']) && !is_int(intval($_GET['id']))) {
                throw new \UnexpectedValueException("L'id attendu doit être un integer!", 500);
            }
            $id = intval($_GET['id']);

            $entityName = substr($this->entity, 13);
            ($this->model->delete($id))
                ? Responser::response(['message' => $entityName . ' supprimé(é) avec succès!'])
                : Responser::response(['message' => 'Erreur lors de la suppression de l\'entité !'], 500);
        } catch (Exception $e) {
            Responser::response([$e->getMessage()], $e->getCode());
        }
    }
}
