<?php

namespace App\Repositories\Eloquent;

use App\Models\Car;
use App\Repositories\Contracts\CarRepositoryInterface;

class CarRepository extends AbstractRepository implements CarRepositoryInterface
{
    protected $model = Car::class;
}
