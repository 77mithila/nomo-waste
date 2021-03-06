<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Product\ProductRepositoryInterface',
            'App\Product\ProductRepository'
        );

        $this->app->bind(
            'App\Manager\ManagerRepositoryInterface',
            'App\Manager\ManagerRepository'
        );


    }
}
