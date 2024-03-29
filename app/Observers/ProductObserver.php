<?php

namespace App\Observers;

use App\Product;
use Illuminate\Support\Facades\Cache;

class ProductObserver
{
    /**
     * Handle the product "created" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        Cache::forget("products:{$product->category->id}");
        Cache::forget('mostRatedProducts');
        Cache::forget('recentProducts');
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        Cache::forget("products:{$product->category->id}");
        Cache::forget('mostRatedProducts');
        Cache::forget('recentProducts');
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        Cache::forget("products:{$product->category->id}");
        Cache::forget('mostRatedProducts');
        Cache::forget('recentProducts');
    }
}
