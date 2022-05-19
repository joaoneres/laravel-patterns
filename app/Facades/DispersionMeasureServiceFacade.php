<?php

namespace App\Facades;

use App\Services\DispersionMeasureService;
use Illuminate\Support\Facades\Facade;

class DispersionMeasureServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return DispersionMeasureService::class;
    }
}
