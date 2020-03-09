<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'name', 'city', 'address', 'phone', 'details'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
