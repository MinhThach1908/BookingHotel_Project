<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'room_id',
        'phone',
        'checkin_date',
        'checkout_date',
        'total_adults',
        'total_children',
    ];

    function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    function room(){
        return $this->belongsTo(Room::class);
    }

    function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
