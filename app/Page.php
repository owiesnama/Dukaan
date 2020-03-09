<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 */
class Page extends Model
{
    protected $fillable = [
        'title', 'body', 'slug'
    ];

    /**
     * get page by slug
     *
     * @param $slug
     * @return mixed
     */
    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->firstOrFail();
    }

    /**
     * specify the field to use on route model binding
     *
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
