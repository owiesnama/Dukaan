<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show shop main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recentProducts = Product::latest()->get()->take(8);

        return view('home', compact('recentProducts'));
    }
}
