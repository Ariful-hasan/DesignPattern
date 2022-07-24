<?php

namespace App\Facade;

use App\Facade\HardwareCheck;
use App\Facade\SoftwareCheck;

class LaptopFacade 
{
    public HardwareCheck $hardwareCheck;
    public SoftwareCheck $softwareCheck;

    public function __construct()
    {
        $this->hardwareCheck = new HardwareCheck();
        $this->softwareCheck = new SoftwareCheck();
    }

    public function switchOnLaptop(): void
    {
        if ($this->hardwareCheck->checkAllHardwares() && $this->softwareCheck->checkAllSoftwares()) {
            dump('Laptop turn on...');
        }
    }
}