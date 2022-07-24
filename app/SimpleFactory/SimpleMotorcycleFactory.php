<?php

namespace App\SimpleFactory;

use App\SimpleFactory\Motorcycle;

class SimpleMotorcycleFactory
{
    public static function create(string $brand, string $model)
    {
        return new Motorcycle($brand, $model);
    }
}