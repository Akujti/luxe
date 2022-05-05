<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $appends = [
        'start',
        'imageUrl',
        'className',
        'fullType',
    ];

    protected $fillable = [
        'title',
        'location',
        'date',
        'image',
        'start_time',
        'end_time',
        'rsvp',
        'zoom',
        'type'
    ];

    public function attendees()
    {
        return $this->belongsToMany(User::class);
    }

    public function getClassNameAttribute()
    {
        return $this->type;
    }

    public function getFullTypeAttribute()
    {
        return str_replace('_', ' ', $this->type);
    }

    public function getStartAttribute()
    {
        return $this->date .  ($this->attributes['start_time'] ? ' ' . $this->attributes['start_time'] : '');
    }

    public function getEndAttribute()
    {
        return $this->date . ' ' . $this->attributes['end_time'];
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . str_replace('\\', '/', $this->image));
    }
}
