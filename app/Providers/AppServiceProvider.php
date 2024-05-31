<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\PedRegistration;
use  App\observers\PedRegistrationObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //ped registration provider saving
        // PedRegistration::observe(PedRegistrationObserver::class);
    }
}
