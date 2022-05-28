<?php

namespace App\Models\Feed;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];

    public function likeable() {
        return $this->morphTo();
    }
}
