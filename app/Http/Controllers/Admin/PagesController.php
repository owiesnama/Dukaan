<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('admin.pages.index', compact('pages'));
    }

    public function update()
    {
        collect(config('dukaan.pages'))->each(function ($_, $slug) {
            $page = Page::findBySlug($slug);
            $page->body = request('body')[$slug];
            $page->save();
        });
        flash('Saved successfully')->success();
        return back();
    }
}
