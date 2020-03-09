<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $creator
 */
class Review extends Model
{
    protected $guarded = [];

    /**
     * get the creator of the review
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * get most 3 recent reviews
     *
     * @param $query
     */
    public function scopeRecent($query)
    {
        $query->latest()->take(3);
    }
}
