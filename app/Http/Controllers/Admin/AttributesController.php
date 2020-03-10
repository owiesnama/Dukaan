<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AttributesController extends Controller
{
    public function index()
    {
        return view('admin.attributes.index');
    }
}
