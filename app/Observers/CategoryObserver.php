<?php

namespace App\Observers;

use App\Category;
use Illuminate\Support\Facades\Cache;

class CategoryObserver
{
    /**
     * Handle the category "created" event.
     *
     * @return void
     */
    public function created()
    {
        Cache::forget('mainCategories');
    }

    /**
     * Handle the category "updated" event.
     *
     * @return void
     */
    public function updated()
    {
        Cache::forget('mainCategories');
    }

    /**
     * Handle the category "deleted" event.
     *
     * @return void
     */
    public function deleted()
    {
        Cache::forget('mainCategories');
    }
}
