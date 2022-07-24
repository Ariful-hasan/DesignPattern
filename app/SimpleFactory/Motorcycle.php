<?php

namespace App\SimpleFactory;

class Motorcycle
{
    public function __construct(private string $brand, private string $model)
    {
        
    }

    public function getMakeAndModel()
    {
        return $this->brand. ' - '. $this->model;
    }
}