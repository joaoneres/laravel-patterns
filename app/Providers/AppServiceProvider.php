<?php

namespace App\Providers;

use App\Repositories\Contracts\CarRepositoryInterface;
use App\Repositories\Eloquent\CarRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CarRepositoryInterface::class, CarRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
