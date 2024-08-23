<?php

namespace App\Providers;

use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
    public function boot(Gate $gate): void
    {
        Schema::defaultStringLength(191);
        $gate->define('role', function ($user) {
            return $user->role === 'admin';
        });
    }
}
