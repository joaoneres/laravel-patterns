<?php

namespace App\Services;

class FeeCalculatorService
{
    protected $rate;

    public function __construct(Int $rate)
    {
        $this->rate = $rate;
    }

    public function fee($value)
    {
        return $value += ($value * ($this->rate / 100));
    }
}
