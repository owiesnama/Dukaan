<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $products
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Collection extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function add($product)
    {
        return $this->products()->create($product);
    }
}
