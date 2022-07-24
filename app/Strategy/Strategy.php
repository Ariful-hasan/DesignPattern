<?php

namespace App\Strategy;

use App\Strategy\StrategyContract;

class Strategy
{
    public function __construct(public StrategyContract $strategy)
    {
        # code...
    }

    public function showDiscountPercentage(): string
    {
        return $this->strategy->getDiscount();
    }
}