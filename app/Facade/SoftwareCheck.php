<?php

namespace App\Facade;

use App\Facade\Os;
use App\Facade\Driver;

class SoftwareCheck
{
    private Os $os;
    private Driver $driver;

    public function __construct()
    {
        $this->os = new Os();
        $this->driver = new Driver();
    }

    public function checkAllSoftwares(): bool
    {
        return $this->os->checkOsOnBoot() && $this->driver->checkDriverOnBoot();
    }
}