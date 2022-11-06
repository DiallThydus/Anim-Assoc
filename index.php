<?php

use App\Controllers\UserController;

const ROOT = __DIR__;
require ROOT . "/vendor/autoload.php";

// Affiche notre page de catégories
// (new CategoryManager)->getCategories();
// (new PostManager)->getPosts();
(new UserController)->login();






