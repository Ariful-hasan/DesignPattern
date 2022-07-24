<?php

namespace App\FactoryMethod;

use App\FactoryMethod\MotorcycleContract;

class MotorcycleYamaha implements MotorcycleContract
{
    public function getMakeAndModel()
    {
        return "this is Yamaha since 1993.";
    }
}

//MotorcycleYahama