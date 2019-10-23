<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        if (Cart::content()->isNotEmpty()) {
            $orderDetails = new OrderDetails($request->order);
            $order = new Order();
            if ($request->checkout_method == 'register') {
                // Register the user
                $order->user_id = 1;
            } else {
                $order->details = $orderDetails;
            }
            $order->cart_details = Cart::content();
            $order->save();
            Cart::destroy();

            flash(__('checkout.Order purchased successfully'))->success();
        } else {
            flash(__('checkout.Your cart is empty'))->warning();
        }
        return back();
    }
}
