<?php

namespace App\Filters;

class ProductFilters extends Filters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = ['priceLessThan', 'priceMoreThan'];

    public function priceLessThan($price)
    {
        $this->builder->where('price', '<', $price);
    }

    public function priceMoreThan($price)
    {
        $this->builder->where('price', '>', $price);
    }
}
