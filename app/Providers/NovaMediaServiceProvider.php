<?php

namespace Modules\NovaMedia\app\Providers;

use Laravel\Nova\Nova;
use Illuminate\Support\Facades\Blade;
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
    protected string $moduleNameLower = 'novamedia';

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        // Load DB migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Register config.
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('nova-media'.'.php')], 'nova-media-config');

        // Register blade directives
        $this->registerBladeDirectives();
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
     * Register blade directives.
     */
    private function registerBladeDirectives(): void
    {
        Blade::directive('mediaImage', function ($media_id) {
            // Find media by id
            $media = \Modules\NovaMedia\app\Models\Media::find($media_id);

            // Return image tag with alt_text and url
            return "<img src='{$media->url}' alt='{$media->alt_text}' />";
        });
    }
}
