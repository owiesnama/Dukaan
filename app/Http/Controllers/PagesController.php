<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contactUs()
    {
        return view('contact');
    }

    public function show(Page $page)
    {
        return view('page', compact('page'));
    }
}
