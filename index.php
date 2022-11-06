<?php

use App\Controllers\UserController;

const ROOT = __DIR__;
require ROOT . "/vendor/autoload.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Affiche notre page de catégories
// (new CategoryManager)->getCategories();
// (new PostManager)->getPosts();

// (new UserController)->create();
(new UserController)->create();
