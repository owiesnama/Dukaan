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
    protected $fillable = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
