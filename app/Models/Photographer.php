<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photographer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'avatar'];
    protected $appends = ['avatar_url'];

    public function properties()
    {
        return $this->hasMany(PhotographerProperty::class);
    }

    public function getAvatarUrlAttribute()
    {
        if ($this->avatar)
            return Storage::disk('public')->url($this->avatar);
        return 'https://ui-avatars.com/api/?name=' . $this->name . '&size=512&format=png';
    }
}
