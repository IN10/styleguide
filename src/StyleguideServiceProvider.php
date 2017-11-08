<?php

namespace IN10\Styleguide;

use Illuminate\Support\ServiceProvider;

class StyleguideServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //  This package is not available on production
        if (app()->environment('production')) {
            return;
        }

        //  Load the routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Load the views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'styleguide');

        // Publish the config
        $this->publishes([__DIR__ . '/../resources/config/styleguide.php' => config_path('styleguide.php')], 'styleguide');

        // Merge config file
        $this->mergeConfigFrom(__DIR__ . '/../resources/config/styleguide.php', 'styleguide');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
