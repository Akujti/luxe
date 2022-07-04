<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralPartner extends Model
{
    use HasFactory;

    public function meta_items()
    {
        return $this->hasMany(ReferralPartnerMeta::class);
    }
}
