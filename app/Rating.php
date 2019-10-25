<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Rating extends Model
{
    /**
     * Attributes to guard against mass-assignment.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * Get products with high ratings.
     *
     * @param Builder $builder
     * @param ProductFilters $filters
     *
     * @return Builder
     */
    public static function mostRated()
    {
        return static::where('rating', '>' , 4);
    }
}
