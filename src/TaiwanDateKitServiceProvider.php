<?php

namespace Fan\Transfer;

use Illuminate\Support\ServiceProvider;

class TaiwanDateKitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind('fan.taiwanDateKit', function ($app) {
            return new TaiwanDateKitClass();
        });
    }
}
