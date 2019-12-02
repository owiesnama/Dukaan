<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Lang;

class CartController extends Controller
{
    /**
     * Gets all cart content.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        if (request()->wantsJson()) {
            return response(['cart' => Cart::content()], 200);
        }

        return view('cart');
    }

    /**
     * Add a product to the cart.
     *
     * @param Product $product
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(Product $product)
    {
        Cart::add($product, 1, ['name' => $product->name, 'thumbnail' => $product->thumbnail]);

        return response([
            'message' => Lang::get('cart.product added to the cart'),
            'cart' => Cart::content(),
        ], 200);
    }

    /**
     * Update a given product qty.
     *
     * @param $rowId
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function update($rowId)
    {
        request()->validate(['qty' => 'required|numeric']);
        Cart::update($rowId, request('qty'));

        return response([
            'message' => Lang::get('cart.product updated successfully'),
            'cart' => Cart::content(),
            ], 200);
    }

    /**
     * Delete product from the cart.
     *
     * @param $rowId
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return response([
            'message' => Lang::get('cart.product removed from the cart'),
            'cart' => Cart::content(),
        ]);
    }
}
