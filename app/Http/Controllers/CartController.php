<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Lang;

class CartController extends Controller
{
    public function index()
    {
        if (request()->wantsJson()) {
            return response(['cart' => Cart::content(),], 200);
        }
        return view('cart');
    }

    public function store(Product $product)
    {
        Cart::add($product, 1, ['name' => $product->name, 'thumbnail' => $product->thumbnail,]);

        return response([
            'message' => Lang::get('cart.product added to the cart'),
            'cart' => Cart::content(),
        ], 200);
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return response([
            'message' => Lang::get('cart.product removed from the cart'),
            'cart' => Cart::content(),
        ]);
    }
}
