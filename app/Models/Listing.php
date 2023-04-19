<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "type",
        "address",
        "price",
        "baths",
        "beds",
        "living_area",
        "lot_size",
        "main_image",
        "images",
        "list_date",
        "lng",
        "lat",
        "rental"
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
