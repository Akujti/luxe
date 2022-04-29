<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'author', 'body'
    ];

    protected $with = ['user_author'];

    public function user_author() {
        return $this->belongsTo(User::class, 'author');
    }
}
