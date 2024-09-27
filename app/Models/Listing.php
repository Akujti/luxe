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

    protected $appends = ['main_image_url'];

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function getMainImageAttribute($value): string
    {
        if ($value === 'images/image-coming-soon-placeholder.png' || $value === null) {
            return 'https://maps.googleapis.com/maps/api/streetview?size=800x400&location=' . $this->address . '&fov=90&key=' . env('GOOGLE_MAPS_API_KEY');
        }
        return $value;
    }

    public function getMainImageUrlAttribute()
    {
        $mainImage = $this->getMainImageAttribute($this->attributes['main_image'] ?? null);

        // If it's already a full URL, return as is
        if (filter_var($mainImage, FILTER_VALIDATE_URL)) {
            return $mainImage;
        }

        // Otherwise, assume it's a relative path and prepend the app's URL
        return asset($mainImage);
    }

    public function getAddressAttribute($value)
    {
        // Remove ", USA" or ", EE. UU." if present at the end of the address
        return preg_replace('/,\s*(USA|EE\. UU\.)$/', '', $value);
    }
}
