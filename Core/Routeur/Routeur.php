<?php

namespace Core\Routeur;

use App\Controllers\AnimalController;
use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\UserController;
use Exception;

class Routeur
{
    public static function routes(): void
    {
        try {
            if(isset($_GET['controller']) && isset($_GET['action']))
            {
                switch ($_GET['controller']) {
                    case 'home':
                        (new HomeController)->index();
                        break;
                    case 'user':
                        switch ($_GET['action']) {
                            case 'index':
                                (new UserController)->index();
                                break;
                            case 'show':
                                (new UserController)->show();
                                break;
                            case 'register':
                                (new UserController)->create();
                                break;
                            case 'update':
                                (new UserController)->update();
                                break;
                            case 'login':
                                (new UserController)->login();
                                break;
                            case 'delete':
                                (new UserController)->delete();
                                break;
                            default:
                                echo "Action inconnue";
                                break;
                        }
                        break;
                    case 'product':
                        switch ($_GET['action']) {
                            case 'index':
                                (new ProductController)->index();
                                break;
                            case 'show':
                                (new ProductController)->show();
                                break;
                            case 'update':
                                (new ProductController)->update();
                                break;
                            case 'delete':
                                (new ProductController)->delete();
                                break;
                            default:
                                echo "Action inconnue";
                                break;
                        }
                        break;
                    case 'category':
                        switch ($_GET['action']) {
                            case 'index':
                                (new CategoryController)->index();
                                break;
                            case 'show':
                                (new CategoryController)->show();
                                break;
                            case 'update':
                                (new CategoryController)->update();
                                break;
                            case 'delete':
                                (new CategoryController)->delete();
                                break;
                            default:
                                echo "Action inconnue";
                                break;
                        }
                        break;
                    case 'animal':
                        switch ($_GET['action']) {
                            case 'index':
                                (new AnimalController)->index();
                                break;
                            case 'show':
                                (new AnimalController)->show();
                                break;
                            case 'update':
                                (new AnimalController)->update();
                                break;
                            case 'delete':
                                (new AnimalController)->delete();
                                break;
                            default:
                                echo "Action inconnue";
                                break;
                        }
                        break;
                    default:
                        echo "Controller inconnu";
                        break;
                }
            } else {
                echo 'pouet';
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

}