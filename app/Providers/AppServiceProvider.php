<?php

namespace App\Providers;

use App\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function ($view){
            $view->with('mainCategories',Category::main()->with('children')->get());
        });

        View::composer('*',function($view){
            $view->with('cart',Cart::content());
        });
    }
}
