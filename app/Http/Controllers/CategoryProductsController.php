<?php

namespace App\Http\Controllers;

use App\Category;
use App\Filters\ProductFilters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoryProductsController extends Controller
{
    public function index(Category $category, ProductFilters $filters)
    {
        $products = Cache::rememberForEver("products:{$category->id}", function () use ($category, $filters) {
        	return $category->getProducts()
            ->filterBy($filters)
            ->paginate(12);
        });
        return view('products', compact('products', 'category'));
    }
}
