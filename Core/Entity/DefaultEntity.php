<?php

namespace Core\Entity;

use JsonSerializable;

abstract class DefaultEntity implements JsonSerializable
{

    protected function hydrate($data = []): void
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function __invoke(): array
    {
        $array = array();
        $methods = get_class_methods($this);

        foreach ($methods as $method) {
            if (str_contains($method, 'get')) {
                $key = strtolower(substr($method, 3));
                if (method_exists($this, $method) && $method !== 'getId') {
                    $array[$key] = $this->$method();
                }
            }
        }
        return $array;
    }
}