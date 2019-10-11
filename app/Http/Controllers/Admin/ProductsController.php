<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(16);

        return view('admin.products.index', compact('products'));
    }

    /**
     * return creating product view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Create a new product.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store()
    {
        $validatedAttributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'sometimes',
        ]);

        Product::create($validatedAttributes);

        return redirect('/admin/products');
    }

    /**
     * return editing product view.
     *
     * @param Product $product
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * a update a given product.
     *
     * @param Product $product
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function update(Product $product)
    {
        $validatedAttributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $product->update($validatedAttributes);

        return redirect('/admin/products');
    }
}
