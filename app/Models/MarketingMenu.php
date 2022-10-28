<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingMenu extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status', 'details', 'answer'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
