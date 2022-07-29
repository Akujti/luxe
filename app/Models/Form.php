<?php

namespace App\Models;

use App\Models\EmailsForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'path'
    ];


    public function emails()
    {
        return $this->hasMany(EmailsForm::class, 'form_id', 'id');
    }
}
