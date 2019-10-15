<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ProductFilters;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    public function index(ProductFilters $filters)
    {
        $products = Product::latest()->filterBy($filters)->paginate(16);

        return view('admin.products.index', compact('products'));
    }

    /**
     * return creating product view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Create a new product.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        Product::create($attributes);

        return redirect()->route('admin.products.index');
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
        $categories = Category::all();

        return view('admin.products.edit', compact('product', 'categories'));
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
        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $product->update($attributes);

        return redirect('/admin/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index');
    }
}
