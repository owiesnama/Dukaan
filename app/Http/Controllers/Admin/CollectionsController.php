<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    public function index()
    {
        return view('admin.collections.index');
    }

    public function create()
    {
        return view('admin.collections.create');
    }
}
