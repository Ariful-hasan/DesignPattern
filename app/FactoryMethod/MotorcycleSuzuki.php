<?php

namespace App\FactoryMethod;

use App\FactoryMethod\MotorcycleContract;

class MotorcycleSuzuki implements MotorcycleContract
{
    public function getMakeAndModel()
    {
        return "this is Suzuki since 1990.";
    }
}