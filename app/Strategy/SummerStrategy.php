<?php

namespace App\Strategy;

use App\Strategy\StrategyContract;

class SummerStrategy implements StrategyContract
{
    public function getDiscount(): string
    {
        return '10% discount for summer.';
    }
}