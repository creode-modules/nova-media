<?php

namespace Modules\NovaMedia\app\Providers;

use \Illuminate\Support\Facades\Config;
use Laravel\Nova\Nova;
use Illuminate\Support\ServiceProvider;

class NovaMediaServiceProvider extends ServiceProvider
{
    /**
     * Name of Module
     *
     * @var string
     */
    protected string $moduleName = 'NovaMedia';

    /**
     * Lowercase name of module.
     *
     * @var string
     */
    protected string $moduleNameLower = 'nova-media';

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        // Load DB migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Register config.
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('nova-media'.'.php')], 'nova-media-config');

        // Register views.
        $this->registerViews();
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        // Bind default values into config.
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'nova-media');

        Nova::resources([\Modules\NovaMedia\app\Nova\MediaResource::class]);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        // Path where views are stored in this package.
        $packageViewBasePath = __DIR__.'/../../resources/views';

        // Loads in the views from this package so they can be overwritten by the application.
        $this->loadViewsFrom($packageViewBasePath, $this->moduleNameLower);

        // Publishes views to the application so they can be modified.
        $this->publishes([
            $packageViewBasePath => resource_path("views/vendor/$this->moduleNameLower"),
        ], ['views', $this->moduleNameLower . '-views']);
    }
}
