<?php

namespace Dcplibrary\Test\App\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register package services and config.
     *
     * mergeConfigFrom runs here so config('test.*') is available
     * to other providers during boot.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/test.php',
            'test'
        );

        $this->app->singleton('test', function ($app) {
            return new \Dcplibrary\Test\Test(
                $app['config']['test']
            );
        });
    }

    /**
     * Bootstrap package resources.
     *
     * Everything here is loaded automatically — no artisan vendor:publish
     * required to use the package. Publishing is available for customisation.
     */
    public function boot(): void
    {
        // Routes — loaded directly from the package; no publishing needed
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        // Views — accessible as 'test::view-name' immediately
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'test');

        // Migrations — run automatically with php artisan migrate; no publishing needed
        $this->loadMigrationsFrom(__DIR__ . '/../../database/Migrations');

        // Translations — accessible as 'test::messages.key' immediately
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'test');

        if ($this->app->runningInConsole()) {
            // Publish config — for customisation only; package works without it
            $this->publishes([
                __DIR__ . '/../../config/test.php' => config_path('test.php'),
            ], ['test', 'test-config']);

            // Publish views — for customisation only; package works without it
            $this->publishes([
                __DIR__ . '/../../resources/views' => resource_path('views/vendor/test'),
            ], ['test', 'test-views']);

            // Publish migrations — only needed if the user wants to modify them
            $this->publishes([
                __DIR__ . '/../../database/Migrations' => database_path('migrations'),
            ], ['test', 'test-migrations']);
        }
    }
}
