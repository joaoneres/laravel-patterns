<?php

namespace App\Services;

class DispersionMeasureService
{
    public function totalAmplitude(Array $values)
    {
        $highest_value = max($values);
        $lowest_value = min($values);
        return $highest_value - $lowest_value;
    }
}
