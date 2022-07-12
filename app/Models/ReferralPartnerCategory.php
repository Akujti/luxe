<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralPartnerCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'icon'];

    public function referral_partners()
    {
        return $this->hasMany(ReferralPartner::class);
    }

    public function children()
    {
        return $this->hasMany(ReferralPartnerCategory::class, 'parent_id');
    }
}