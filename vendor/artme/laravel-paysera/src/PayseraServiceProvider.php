<?php

namespace Artme\Paysera;

use Illuminate\Support\ServiceProvider;

include __DIR__.'/routes.php';

class PayseraServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Artme\Paysera\PayseraController');
        require_once(__DIR__.'/../lib/WebToPay.php');
    }
}
