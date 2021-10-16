<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class TemplateSubmit extends Model
{
    use HasFactory;

    protected $fillable = [
        'template_id',
        'status'
    ];

    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id');
    }
}
