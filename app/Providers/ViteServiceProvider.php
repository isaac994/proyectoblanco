<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Vite;

class ViteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Force HTTPS for Vite assets in production
        if (app()->environment('production')) {
            Vite::useHotFile('https://proyectoblanco-production.up.railway.app/build/hot');
        }
    }
}
