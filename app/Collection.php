<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $products
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property mixed $add
 */
class Collection extends Model
{
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function assign($products)
    {
        return $this->products()->sync($products, $detaching = false);
    }
}
