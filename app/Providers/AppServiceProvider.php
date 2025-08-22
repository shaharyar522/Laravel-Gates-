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
        //first check this if user after login the admin then show true other wise false
        Gate::define('isAdmin', function (User $user) {
            return $user->role === 'admin'; // ✅ Check role column
        });


        Gate::define('view-profile', function (User $user, $userprofile) {
            return $user->id === $userprofile;
        });

        Gate::define('update-post', function(User $user, $targetuser){
            return $user->id === $targetuser;
        });


    }
}
