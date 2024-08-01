<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'room_type_id',
    ];

    function Roomtype()
    {
        return $this->belongsTo(Room::class, 'room_type_id');
    }
}
