<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

//use Illuminate\Auth\Access\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public static $permission =[
        'dashboard' =>['superadmin','admin'],
        'user-index' =>['admin'],
        'payment-update' =>['admin'],
    ];
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        foreach(self::$permission as $fearure => $roles){
            Gate::define('dashboard',function (User $user) use($roles){
                if (in_array($user->role, $roles)){
                return true;
                }
            });
        }
    }
}
