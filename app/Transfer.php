<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{

    public const WAITING    = 0;
    public const PROCESSING = 1;
    public const DONE       = 2;

    protected $fillable = [
        'amount',
        'status',
        'currency_id',
        'user_id',
        'price_at',
        'twd_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function getAmountAttribute($value)
    {
        return decimal_value($value);
    }

    public function getTwdPriceAttribute($value)
    {
        return decimal_value($value);
    }

    public function scopeWho($query, $userId)
    {
        return $query->where('user_id', '=', $userId);
    }

    public function scopeWaiting($query)
    {
        return $query->where('status', '!=', self::DONE);
    }
}
