<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'room_id',
        'start',
        'end',
        'name',
        'email',
        'phone'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }


}
