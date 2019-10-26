<?php

namespace App\Providers;

use App\Product;
use App\Category;
use App\Rating;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\View\View;
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
        view()->composer('*',function (View $view){
            $view->with('mainCategories',Category::main()->with('children')->get());
            $view->with('cart', Cart::content());
            $view->with('recentProducts', Product::latest()->take(4)->get());
            $view->with('mostRatedProducts', Rating::mostRated()->take(4)->get());
        });
    }
}
