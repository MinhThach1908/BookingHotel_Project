<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    function bookings()
    {
        return $this->belongsTo(Booking::class);
    }
}
