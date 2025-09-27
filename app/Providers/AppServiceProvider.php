<?php

namespace App\Providers;


use Illuminate\Support\Facades\Gate as FacadesGate;
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
    public function boot(): void
    {
        FacadesGate::define('admin-only',function($user){
            return $user->roles == 'admin';
        });
        
        FacadesGate::define('user-only',function($user){
        return $user->roles == 'user';
        });
    }
}
