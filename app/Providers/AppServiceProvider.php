<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\KudismsService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(KudismsService::class, function ($app) {
            return new KudismsService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
