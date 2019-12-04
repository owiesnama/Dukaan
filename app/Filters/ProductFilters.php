<?php

namespace App\Filters;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductFilters extends Filters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = ['priceLessThan', 'priceMoreThan', 'sortBy', 'priceRange'];


    /**
     * @param $price
     */
    public function priceRange($range)
    {
        list($lowerPrice,$highPrice) = explode('-', trim(str_replace('$', '', trim($range))));
        session()->put('highestPrice',$highPrice);
        session()->put('lowestPrice',$lowerPrice);
        $this->priceLessThan((double) $highPrice);
        $this->priceMoreThan((double) $lowerPrice);
    }

    /**
     * @param $price
     */
    public function priceLessThan($price)
    {
        $this->builder->where('price', '<', $price);
    }

    /**
     * @param $price
     */
    public function priceMoreThan($price)
    {
        $this->builder->where('price', '>', $price);
    }

    /**
     * @param $sortBy
     * @return mixed
     */
    public function sortBy($sortBy)
    {
        return $this->{$sortBy}();
    }


    private function rating()
    {
        return $this->builder->withCount(['ratings as average_rating' => function ($query) {
            $query->select(DB::raw('AVG(rating)'));
        }
        ])->orderByDesc('average_rating');
    }

    private function newness()
    {
        return $this->builder->latest();
    }

    private function highestPrices()
    {
        $this->builder->orderByDesc('price');
    }

    private function lowestPrices()
    {
        $this->builder->orderBy('price');
    }
}
