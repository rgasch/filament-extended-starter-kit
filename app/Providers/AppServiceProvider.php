<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;

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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            $primaryColor   = Config::get('filament.colors.primary', '#1bb6ff');
            $secondaryColor = Config::get('filament.colors.secondary', '#ff49db');

            Filament::pushMeta(
                [
                    new HtmlString('<meta name="theme-primary-color" id="theme-primary-color" content="' . $primaryColor . '">' .
                                   '<meta name="theme-secondary-color" id="theme-secondary-color" content="' . $secondaryColor . '">'),
               ]);
        });
    }
}
