<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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

    /*
     * 
     * Bootstrap any application services.
     * 
     */

    public function boot(): void
    {

        Gate::define('isAdmin', function (User $user) {
            return $user->role === 'admin'; // ✅ Check role column
        });
        //first check this if user after login the admin then show true other wise false

        
    }
}
