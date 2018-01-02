<?php

namespace Jumpitt\Multiauth;

use Illuminate\Support\ServiceProvider;

class MultiauthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/middleware' => base_path('app/Http/Middleware'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/editauth.php', 'auth.guards'
        );
    }
}