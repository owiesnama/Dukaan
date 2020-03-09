<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * Class Order
 * @package App
 * @property mixed $address
 * @property \App\OrderDetails $details
 * @property mixed $cart_details
 * @property mixed $amount
 * @property string $info
 * @property string status
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    /**
     * @param Builder $query
     * @param $status
     */
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

    /**
     * Un-serialize the cart details to json string
     *
     * @param $cartDetails
     * @return mixed
     */
    public function getCartDetailsAttribute($cartDetails)
    {
        return json_decode($cartDetails);
    }

    /**
     * get the price amount of the order
     *
     * @return mixed
     */
    public function getAmountAttribute()
    {
        return collect($this->cart_details)->sum('subtotal');
    }

    /**
     * get the full address info
     *
     * @return string
     */
    public function getInfoAttribute()
    {
        return $this->address->address . ' / ' . $this->address->city;
    }

    /**
     * Change order status to bre accepted
     *
     * @return bool
     */
    public function accept()
    {
        $this->status = 'accepted';
        return $this->save();
    }
}
