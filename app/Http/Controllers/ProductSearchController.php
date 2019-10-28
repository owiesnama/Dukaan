<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductSearchController extends Controller
{
    public function index()
    {
        $products = Product::search(request('query'))->paginate(12);

        return view('search-details',compact('products'));
    }
}
