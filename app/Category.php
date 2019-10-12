<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = [
        'name', 'desc', 'parent_id', 'status',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
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
}