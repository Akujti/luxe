<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralPartnerMeta extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'path'];

    public function getPathAttribute($value)
    {
        if ($this->name == 'Logo')
            return asset('storage/' . $value);
        return $value;
    }
}
