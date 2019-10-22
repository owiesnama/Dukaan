<?php

namespace App\Http\Controllers;

use App\Product;
use App\Review;
use Illuminate\Http\Request;

class ProductReviewsController extends Controller
{
    public function store(Product $product)
    {

        $attributes = request()->validate([
            'user_id' => 'required',
            'body' => 'required',
        ]);

        $product->reviews()->create($attributes);

        return response('review created',200);
    }

    public function destroy(Product $product,Review $review)
    {
        if(! auth()->user()->is($review->creator)){
            abort(403);
        }

        $review->delete();

        return response('review deleted', 200);
    }
}
