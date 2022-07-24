<?php

namespace App\Strategy;

use App\Strategy\StrategyContract;

class BlackFridayStrategy implements StrategyContract
{
    public function getDiscount(): string
    {
        return '50% discount for black friday.';
    }
}