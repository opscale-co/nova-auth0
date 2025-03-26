<?php

namespace Opscale\NovaAuth0;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;
use Opscale\NovaAuth0\Http\Middleware\Authorize;

class ToolServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutes();
        /*$this->loadConfigs();

        if ($this->app->runningInConsole()) {
            $this->loadCommands();
            $this->loadMigrations();
        }

        Nova::serving(function (ServingNova $event) {
            $this->loadResources();
        });*/
    }

    public function register()
    {
        //
    }

    /*protected function loadResources()
    {
        Nova::resources([]);
    }

    protected function loadRoutes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/opscale-co/nova-auth0')
                ->group(__DIR__.'/../routes/api.php');
    }

    protected function loadConfigs()
    {
        $filename = 'nova-auth0.php';
        $this->publishes([
            __DIR__."/../config/$filename" => config_path($filename),
        ]);
    }

    protected function loadCommands()
    {
        $this->commands([]);
    }

    protected function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ]);
    }*/
}
