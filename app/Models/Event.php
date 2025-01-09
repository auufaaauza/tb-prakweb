<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'slug',
        'quota',
        'name',
        'description',
        'start_at',
        'end_at',
        'address',
        'price',
        'image'
    ];

    protected $routeKeyName = 'slug';
    protected $appends = ['start','end','harga'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->name);
            }
        });

        static::updating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->name);
            }
        });
    }

    public function getHargaAttribute(){
        return 'Rp.' . number_format($this->price, 2, ',', '.');
    }

    public function getStartAttribute(){
        $date = Carbon::parse($this->start_at);
        return $date;
    }

    public function getEndAttribute(){
        $date = Carbon::parse($this->start_at);
        return $date;
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'event_id');
    }
}
