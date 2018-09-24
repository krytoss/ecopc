<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Session;

use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);
        
        view()->composer('*', function($view) {

            $cart_qty =  Session::get('cart') ? array_sum(array_column(Session::get('cart'), 'qty')) : 0;
            $view->with('categories', Category::all())->with('cart_qty',$cart_qty);

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
