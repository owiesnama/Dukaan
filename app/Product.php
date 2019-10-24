<?php

namespace App;

use App\Filters\ProductFilters;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Gloudemans\Shoppingcart\Contracts\Buyable;

/**
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property mixed description
 * @property mixed price
 */
class Product extends Model implements HasMedia, Buyable
{
    use HasMediaTrait;

    protected $fillable = [
        'name', 'description', 'price', 'published', 'category_id',
    ];
    protected $appends = ['thumbnail'];

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
     * reviews which associated whit this product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * add review to the product
     *
     * @param $review
     * @param User|null $user
     */
    public function review($review, $user = null)
    {
        $this->reviews()->create([
           'user_id'=> $user ? $user->id : auth()->id(),
            'body'=> $review,
        ]);
    }

    /**
     * Apply all relevant product filters.
     *
     * @param Builder $builder
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
        return $this->getMedia('images')->first() ? $this->getMedia('images')->first()->getUrl() : 'https://placeimg.com/640/480/any?' . $this->id;
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

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->description;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }
}
