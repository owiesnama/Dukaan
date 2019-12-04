<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public function creator()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopeRecent($query)
    {
        $query->latest()->take(3);
    }
}
