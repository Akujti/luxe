<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function emails()
    {
        return $this->hasMany(NotificationEmail::class);
    }

    public function getEmails()
    {
        return $this->emails()->where('bcc', false)->pluck('email')->toArray();
    }

    public function getBccEmails()
    {
        return $this->emails()->where('bcc', true)->pluck('email')->toArray();
    }
}
