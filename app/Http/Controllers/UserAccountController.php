<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserAccountController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->orders;
        return view('my-account', compact('orders'));
    }
}
