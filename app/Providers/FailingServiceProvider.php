<?php

namespace App\Providers;

use App\DeprecatedClass;
use App\NormalClass;
use Illuminate\Support\ServiceProvider;

class FailingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->beforeResolving(NormalClass::class, function () {
            // doesn't matter what happens here.
        });

        // only matters that this is bound.
        $this->app->singleton(DeprecatedClass::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
