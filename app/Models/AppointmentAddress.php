<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'email',
        'price',
        'beds',
        'baths',
        'agent_name',
        'image',
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        if ($this->image)
            return asset('storage/' . $this->image);
        return asset('images/image-coming-soon-placeholder.png');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email')->withTrashed(['email' => $this->email])->withDefault();
    }
}
