<?php

namespace App\Models;

use App\Models\Form;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmailsForm extends Model
{
    use HasFactory;

    protected $table = 'emails_of_form';

    protected $fillable = [
        'email',
        'form_id',
        'bcc'
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
