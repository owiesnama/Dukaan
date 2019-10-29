<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title', 'body', 'slug'
    ];

    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->firstOrFail();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
