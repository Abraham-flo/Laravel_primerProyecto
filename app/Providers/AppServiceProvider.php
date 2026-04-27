<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <--- ESTA LÍNEA ES VITAL

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Esto fuerza a Laravel a generar links con HTTPS si no estás en localhost
        if (config('app.env') !== 'local') {
            URL::forceScheme('https');
        }
    }
}