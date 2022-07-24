<?php

namespace App\Facade;

class Ram
{
    public function checkRamOnBoot(): bool
    {
        dump('Checking ram on boot...');
        return true;
    }
}