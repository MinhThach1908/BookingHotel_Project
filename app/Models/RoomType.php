<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    function roomtypeimgs()
    {
        return $this->hasMany(RoomTypeImage::class, 'room_type_id');
    }

    function rooms()
    {
        return $this->hasMany(Room::class, 'room_type_id');
    }

    function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    protected $fillable = [
        'title',
        'detail',
        'price',
    ];
}
