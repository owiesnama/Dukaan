<?php

namespace App\Http\Controllers;

use App\Category;
use App\Filters\ProductFilters;
use Illuminate\Http\Request;

class CategoryProductsController extends Controller
{
    public function index(Category $category, ProductFilters $filters)
    {
        $products = $category->getProducts()
            ->filterBy($filters)
            ->paginate(12);
        return view('products', compact('products', 'category'));
    }
}
