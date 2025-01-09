<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'event_id',
        'slug',
        'name',
        'phone_number',
        'quantity',
        'total',
        'payment_method'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            $uuid = "ORDX-" . strtoupper(Str::random(5));
            $order->slug = (string) $uuid;
        });
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
