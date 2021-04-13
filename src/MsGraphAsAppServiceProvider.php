<?php

namespace Blackfyre\MsGraphAsApp;

use Illuminate\Support\ServiceProvider;

class MsGraphAsAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $configPath = __DIR__ . '/../config/config.php';

            if (function_exists('config_path')) {
                $publishPath = config_path('ms-graph-as-app.php');
            } else {
                $publishPath = base_path('config/ms-graph-as-app.php');
            }

            $this->publishes([
                $configPath => $publishPath,
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'ms-graph-as-app');

        // Register the main class to use with the facade
        $this->app->singleton('ms-graph-as-app', function () {
            return new MsGraphAsApp;
        });
    }
}
