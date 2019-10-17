<?php

namespace App;

use App\Filters\ProductFilters;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * @property \Carbon\Carbon $created_at
 * @property int            $id
 * @property \Carbon\Carbon $updated_at
 */
class Product extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'name', 'description', 'price', 'published', 'category_id',
    ];

    /**
     * url path for this project.
     *
     * it return a string of this project url path ex:/projects/1
     *
     * @return string
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

    /**
     * Apply all relevant product filters.
     *
     * @param Builder        $builder
     * @param ProductFilters $filters
     *
     * @return Builder
     */
    public function scopeFilterBy($builder, ProductFilters $filters)
    {
        return $filters->apply($builder);
    }

    public function getThumbnailAttribute()
    {
        return $this->getMedia('images')->first() ? $this->getMedia('images')->first()->getUrl() : '#';
    }

    /**
     *  Add images to the products.
     *
     * @param array $images
     */
    public function addImages($images)
    {
        collect($images)->map(function ($image) {
            $this->addMedia($image)->toMediaCollection('images');
        });
    }
}
