<?php

use Core\Routeur\Routeur;

const ROOT = __DIR__;
require ROOT . "/vendor/autoload.php";

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Credentials: true');

header('Content-Type:application/json;charset=utf-8');

Routeur::routes();
