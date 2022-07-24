<?php

namespace App\FactoryMethod;

use App\FactoryMethod\MotorcycleContract;

class MotorcycleDukati implements MotorcycleContract
{
    public function getMakeAndModel()
    {
        return "this is Dukati since 1970.";
    }
}