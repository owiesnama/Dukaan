<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(15);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::main()->get();

        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'parent_id' => 'sometimes',
        ]);

        $category = Category::create($attributes);

        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Category $category
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Category $category
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::main()->not($category->id)->get();

        return view('admin.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category            $category
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'parent_id' => ['sometimes', Rule::notIn($category->id)],
        ]);

        $category->fill($attributes);
        $category->save();

        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
