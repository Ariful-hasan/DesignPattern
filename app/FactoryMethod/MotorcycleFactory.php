<?php

namespace App\FactoryMethod;

use Exception;

class MotorcycleFactory
{
    public static function create(string $brand)
    {
        if (empty($brand)) {
            throw new Exception("Brand must contains a valid Mototcycle Brand!");
        } else {
            $className = __NAMESPACE__.'\Motorcycle'.ucwords($brand);
            //dump($className);die;
            if (!class_exists($className)) {
                throw new Exception("Brand not found!");
            }

            return new $className;
        }
    }
}

//App\FactoryMethod/MotorcycleYamaha