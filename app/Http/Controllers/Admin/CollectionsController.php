<?php

namespace App\Http\Controllers\Admin;

use App\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.collections.index');
    }

    /**s
     */
    public function create()
    {
        return view('admin.collections.create');
    }

    public function edit()
    {
        return view('admin.collections.edit');
    }

    /**
     *
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'visibility' => 'sometimes|required',
            'featured' => 'sometimes|required',
            'products' => 'sometimes|array'
        ]);

        Collection::create(collect($attributes)
            ->except('products')->toArray())
            ->assign(request('products'));

        return view('admin.collections.index');
    }
}
