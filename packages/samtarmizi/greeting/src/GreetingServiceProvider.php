<?php

namespace Samtarmizi\Greeting;

use Illuminate\Support\ServiceProvider;

class GreetingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'Greeting');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Samtarmizi\Greeting\Controllers\GreetingController');
    }
}