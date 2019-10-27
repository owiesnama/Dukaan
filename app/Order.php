<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * Un-serialize the details json to OrderDetails
     *
     * @param $details
     * @return OrderDetails
     */
    public function getDetailsAttribute($details)
    {
        return new OrderDetails(json_decode($details, true));
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    /**
     * Serialize the OrderDetails to json string
     *
     * @param $details OrderDetails
     */
    public function setDetailsAttribute($details)
    {
        $this->attributes['details'] = json_encode($details->toArray());
    }

    public function getCartDetailsAttribute($cartDetails)
    {
        return json_decode($cartDetails);
    }

    public function getAmountAttribute()
    {
        return collect($this->cart_details)->sum('subtotal');
    }

    public function getInfoAttribute()
    {
        return $this->address->address . ' / ' . $this->address->city;
    }
}
