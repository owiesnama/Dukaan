<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryProductsController extends Controller
{
    public function index(Category $category)
    {
        $products = $category->getProducts();
        return view('products', compact('products'));
    }
}
