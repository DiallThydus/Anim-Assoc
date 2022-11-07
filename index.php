<?php

use Core\Routeur\Routeur;

const ROOT = __DIR__;
require ROOT . "/vendor/autoload.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

Routeur::routes();