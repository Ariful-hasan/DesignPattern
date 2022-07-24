<?php

namespace App\Facade;

use App\Facade\MotherBoard;
use App\Facade\Ram;

class HardwareCheck
{
    private MotherBoard $motherBoard;
    private Ram $ram;

    public function __construct()
    {
        $this->motherBoard = new MotherBoard();
        $this->ram = new Ram();
    }
    
    public function checkAllHardwares(): bool
    {
        return $this->motherBoard->checkMotherBoardOnBoot() && $this->ram->checkRamOnBoot();
    }
}