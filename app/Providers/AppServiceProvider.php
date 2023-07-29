<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Employees;
use App\Models\User;

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
        //
        View::share('title', 'Employee Admin');

        View::composer('user.home', function($view){
            $view->with('users', User::orderby('id', 'desc')->where('is_active', 1)->get());
        });
    }
}
