<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * Class Order
 * @package App
 * @method static Order|Builder status($status)
 */
class Order extends Model
{

    protected $appends = ['amount'];
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

    public function scopeStatus(Builder $query, $status)
    {
        if (!in_array($status, config('dukaan.order_status'))) {
            throw new InvalidArgumentException("{$status} is not valid status");
        }
        $query->where('status', $status);
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

    /**
     * Change order status to accepted
     */
    public function accept()
    {
        $this->status = 'accepted';
        $this->save();
    }
}
