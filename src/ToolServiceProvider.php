<?php

namespace Inani\LaravelNovaConfiguration;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Inani\LaravelNovaConfiguration\Http\Middleware\Authorize;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/database/migrations/2018_10_10_000000_create_laravel_nova_configurations_table.php'
            => base_path('database/migrations/2018_10_10_000000_create_laravel_nova_configurations_table.php'),

            __DIR__ . '/resources/views/navigation.blade.php' => resource_path('views/vendor/laravel-nova-configuration'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-nova-configuration');

        $this->app->booted(function () {
            $this->routes();
        });

        Nova::serving(function (ServingNova $event) {
            //
        });
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
            ->prefix('nova-vendor/laravel-nova-configuration')
            ->group(__DIR__ . '/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
