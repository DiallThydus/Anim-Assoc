<?php

namespace App\Services;

class Responser
{
    public static function response(array|object $data, int $code = 200): void
    {
        header('Content-type:application/json;charset=utf-8');
        http_response_code($code);
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}