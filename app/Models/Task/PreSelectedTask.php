<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreSelectedTask extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'start_date', 'author_id'];
}
