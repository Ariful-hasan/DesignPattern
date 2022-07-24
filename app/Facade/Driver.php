<?php

namespace App\Facade;

class Driver 
{
    public function checkDriverOnBoot(): bool
    {
        dump('Checking drivers on boot...');
        return true;
    }
}