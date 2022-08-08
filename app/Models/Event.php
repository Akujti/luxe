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
        'fullDate',
        'attending',
        'status'
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
        'private',
        'type'
    ];

    public function getFullDateAttribute()
    {
        return $this->date;
    }

    public function attendees()
    {
        return $this->belongsToMany(User::class);
    }

    public function getStatusAttribute()
    {
        $event = EventUser::where('event_id', $this->id)->where('user_id', auth()->user()->id)->first();
        if ($event) return $event->status;
    }

    public function getAttendingAttribute()
    {
        return auth()->user()->attending_events()->where('event_id', $this->id)->first() != null;
    }

    public function getClassNameAttribute()
    {
        return $this->type;
    }

    public function getFullTypeAttribute()
    {
        return ucwords(str_replace('_', ' ', $this->type));
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
