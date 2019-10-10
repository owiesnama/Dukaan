<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 */
class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'published'];


    /**
     * url path for this project
     *
     * it return a string of this project url path ex:/projects/1
     *
     * @return String
     */
    public function path()
    {
        return "/admin/products/{$this->id}";
    }

    /**
     * category which associated whit this product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
