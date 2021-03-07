<?php

namespace Zeevx\BulkSmsNigeria;

use Illuminate\Support\ServiceProvider;

class BulkSmsNigeriaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'bulk-sms-nigeria');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'bulk-sms-nigeria');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('bulk-sms-nigeria.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/bulk-sms-nigeria'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/bulk-sms-nigeria'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/bulk-sms-nigeria'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'bulk-sms-nigeria');

        // Register the main class to use with the facade
        $this->app->singleton('bulk-sms-nigeria', function () {
            return new BulkSmsNigeria;
        });
    }
}
