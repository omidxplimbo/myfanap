<?php

namespace Dev\Main;

use Illuminate\Support\ServiceProvider;

class FanapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/fanap.php', 'myfanap');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');
        $this->publishes([
            __DIR__ . '/config/fanap.php' => config_path('myfanap.php')
        ]);
    }
}
