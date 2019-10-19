<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $products
 * @property mixed $children
 */
class Category extends Model
{
    public $fillable = [
        'name', 'desc', 'parent_id', 'status',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id')
               ->withDefault([
                'name' => '-',
            ]);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeMain($query)
    {
        $query->whereNull('parent_id');
    }

    public function scopeNot($query, $id)
    {
        $query->where('id', '!=', $id);
    }

    public function addSubCategory(Category $category)
    {
        if ($category->is($this)) {
            return false;
        }

        return $this->children()->save($category);
    }

    public function addProduct(Product $product)
    {
        $this->products()->save($product);
    }

    public function getProducts()
    {
        return Product::whereHas('category', function ($query) {
            $query->whereIn('id', $this->children->pluck('id'))
                ->orWhere('id', $this->id);
        })->get();
    }
}
