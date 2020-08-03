<?php

namespace RenokiCo\BladeMdi;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class BladeMdiServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-mdi'),
            ], 'blade-mdi');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('blade-mdi', [
                'path' => __DIR__.'/../resources/svg',
                'prefix' => 'mdi',
            ]);
        });
    }
}
