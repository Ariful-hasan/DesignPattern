<?php

namespace App\Facade;

class MotherBoard
{
    public function checkMotherBoardOnBoot(): bool
    {
        dump('Checking motherboard on boot...');
        return true;
    }
}