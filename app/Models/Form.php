<?php

namespace App\Models;

use App\Models\EmailsForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'path'
    ];


    public function emails()
    {
        return $this->hasMany(EmailsForm::class, 'form_id', 'id');
    }
}
