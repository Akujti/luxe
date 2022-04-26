<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profile';
    protected $fillable = [
        'fullname', 'address', 'phone', 'languages', 'avatar', 'support_specialists', 'loan_officer'
    ];

    protected static function boot()
    {
        parent::boot();
        static::retrieved(function ($model) {
            $model->languages = json_decode($model->languages);
        });
    }
}
