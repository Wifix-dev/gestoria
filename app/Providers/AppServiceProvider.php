<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    public function boot()
    {
        Blade::directive('svg', function ($path) {
            $path = trim($path, "'\"");
            $file = public_path("svg/{$path}.svg");

            if (file_exists($file)) {
                return file_get_contents($file);
            }

            return '';
        });
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
}
