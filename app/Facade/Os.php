<?php

namespace App\Facade;

class Os 
{
    public function checkOsOnBoot(): bool
    {
        dump('Checing os on boot...');
        return true;
    }
}