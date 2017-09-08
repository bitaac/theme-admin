<?php

namespace Bitaac\ThemeAdmin;

use Bitaac\Core\Providers\AggregateServiceProvider;

class ThemeAdminServiceProvider extends AggregateServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');

        $this->publishes([
            __DIR__.'/../public' => public_path('bitaac/theme-admin'),
        ], 'bitaac:admin:assets');
    }
}
