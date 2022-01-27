<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class W9 extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'text_1',
        'text_2',
        'text_3',
        'text_3_1',
        'select_1',
        'text_4',
        'text_4_1',
        'text_5',
        'text_6',
        'text_7',
        'text_8',
        'text_9',
        'text_10',
        'signature',
        'date'
    ];
}
