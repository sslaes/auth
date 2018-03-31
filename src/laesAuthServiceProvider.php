<?php

namespace SSLAES\Auth;

use Illuminate\Support\ServiceProvider;

class laesAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes/web.php';
        $this->app->make('SSLAES\Auth\AuthController')
    }
}
