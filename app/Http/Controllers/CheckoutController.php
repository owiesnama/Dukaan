<?php

namespace App\Http\Controllers;

use Str;
use App\Address;
use App\User;
use App\Order;
use App\OrderDetails;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        if (Cart::content()->isNotEmpty()) {
            $order = new Order();
            $address = Address::create($request->address);

            if ($request->checkout_method == 'register') {
                $user = User::create([
                    'name' => $request->address['name'],
                    'email' => $request->address['email'],
                    'password' => Str::random(8),
                ]);
                $address->user_id = $user->id;
                $address->save();
                $order->user_id = 1;
            }

            $order->cart_details = Cart::content();
            $order->address_id = $address->id;
            $order->save();

            Cart::destroy();

            flash(__('checkout.Order purchased successfully'))->success();
        } else {
            flash(__('checkout.Your cart is empty'))->warning();
        }
        return back();
    }
}
