<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductRatingController extends Controller
{
    public function store(Product $product)
    {
        request()->validate([
            'rating' => ['required', 'in:1,2,3,4,5']
        ]);

        $product->rate(request('rating'));
    }
}
