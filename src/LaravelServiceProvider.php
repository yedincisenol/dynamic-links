<?php

namespace yedincisenol\DynamicLinks;

use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */

    public function boot()
    {
        $this->publishes([
            __DIR__ . 'config.php' => config_path('dynamic-links.php'),
        ], "DynamicLinks");

        $this->mergeConfigFrom(
            __DIR__ . 'config.php', 'dynamic-links'
        );

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DynamicLinks::class, function ($app) {
            return new DynamicLinks($app['config']['dynamic-links']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'DynamicLinks'
        ];
    }

}