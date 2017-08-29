<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use Carbon\Carbon;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $age = Carbon::createFromDate(1994, 11, 04)->age;

        View::share('myage', $age);
        View::share('myname', 'Pontus');
        //View::share('auth', Auth::user);

        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
