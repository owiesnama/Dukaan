<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            if (Auth::user()) {
                $user = Auth::user();
                $address = $user->address;
            } else {
                $address = Address::create($request->address);
                if ($request->checkout_method == 'register') {
                    $user = User::create([
                        'name' => $request->address['name'],
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                    ]);
                    $address->user_id = $user->id;
                    $address->save();
                }
            }
            $order->user_id = $user->id;

            $order->cart_details = Cart::content();
            $order->address_id = $address->id;
            $order->save();

            Cart::destroy();

            session()->flash('flash',__('checkout.Order purchased successfully'));
        } else {
            session()->flash('flash',__('checkout.Order purchased successfully'));
        }
        return redirect('/');
    }
}
