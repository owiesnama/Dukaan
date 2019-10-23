<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (request()->wantsJson()) {
            return Cart::content();
        }
        return view('cart');
    }

    public function store(Product $product)
    {
        Cart::add($product,1,['name' => $product->name, 'thumbnail'=> $product->thumbnail,]);

        return response([
            'message' => 'product added to the cart',
            'cart' => Cart::content(),
        ], 200);
    }
}
