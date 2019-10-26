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

    /**
     * Get parent category of this category
     *
     * @return $this
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id')
               ->withDefault([
                'name' => '-',
            ]);
    }

    /**
     * Get associated children
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function siblings()
    {
        return $this->where('parent_id', $this->parent->id)->get();
    }
    /**
     * Get associated products with this category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get top categories that are have no parent
     *
     * @param $query
     */
    public function scopeMain($query)
    {
        $query->whereNull('parent_id');
    }

    /**
     *
     *
     * @param $query
     * @param $id
     */
    public function scopeNot($query, $id)
    {
        $query->where('id', '!=', $id);
    }

    /**
     * Add a category as a child for given category
     *
     * @param Category $category
     * @return bool|false|Model
     */
    public function addSubCategory(Category $category)
    {
        if ($category->is($this)) {
            return false;
        }

        return $this->children()->save($category);
    }

    /**
     * Add a product to under a category
     *
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        $this->products()->save($product);
    }

    /**
     * Get all products with this category or its children
     *
     * @return mixed
     */
    public function getProducts()
    {
        return Product::whereHas('category', function ($query) {
            $query->whereIn('id', $this->children->pluck('id'))
                ->orWhere('id', $this->id);
        });
    }
}
