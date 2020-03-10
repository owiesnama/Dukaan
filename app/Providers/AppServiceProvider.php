<?php

namespace App\Providers;

use App\Category;
use App\Observers\CategoryObserver;
use App\Observers\ProductObserver;
use App\Page;
use App\Product;
use App\Rating;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        view()->composer('*',function (View $view) {
            $view->with('mainCategories', Cache::rememberForEver('mainCategories', function () {
                return Category::main()->with('children')->get();
            }));
            $view->with('user', auth()->user() ?: new User());
            $view->with('cart', Cart::content());
            $view->with('recentProducts', Cache::rememberForEver('recentProducts', function () {
                return Product::latest()->take(4)->get();
            }));
            $view->with('mostRatedProducts', Cache::rememberForEver('mostRatedProducts', function () {
                return Rating::mostRated()->take(4)->get();
            }));
            $view->with('pages', Cache::rememberForEver('pages', function () {
                return Page::all();
            }));
        });

        Blade::directive('money', function ($money) {
            return "<?php echo number_format($money, 2); ?>";
        });

        Category::observe(CategoryObserver::class);
        Product::observe(ProductObserver::class);
    }
}
