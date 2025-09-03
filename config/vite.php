<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Vite Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the Vite settings for your application.
    |
    */

    'https' => env('VITE_HTTPS', env('APP_ENV') === 'production'),

    'host' => env('VITE_HOST', '0.0.0.0'),

    'port' => env('VITE_PORT', 5173),

    /*
    |--------------------------------------------------------------------------
    | Asset URL
    |--------------------------------------------------------------------------
    |
    | The URL where your assets will be served from in production.
    |
    */

    'asset_url' => env('VITE_ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Build Directory
    |--------------------------------------------------------------------------
    |
    | The directory where Vite will build your assets.
    |
    */

    'build_path' => 'build',

];
