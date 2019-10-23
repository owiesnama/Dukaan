<?php

namespace App\Providers;

use App\Product;
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
            $view->with('cart', Cart::content());
            $view->with('recentProducts', Product::latest()->take(4)->get());
        });
    }
}
