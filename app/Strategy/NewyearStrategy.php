<?php

namespace App\Strategy;

use App\Strategy\StrategyContract;

class NewyearStrategy implements StrategyContract
{
    public function getDiscount(): string
    {
        return '30% discount for new year.';
    }
}