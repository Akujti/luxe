<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgreementAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'agreement_page',
        'image'
    ];

    protected $appends = ['imageUrl', 'status'];

    public function getImageUrlAttribute()
    {
        return asset('images/agents/' . $this->image);
    }

    public function getStatusAttribute()
    {
        return true;
    }
}
