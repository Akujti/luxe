<?php

namespace App\Models\Feed;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function imageable() {
        return $this->morphTo();
    }

    protected $appends = ['file_url'];

    public function getFileUrlAttribute() {
        if($this->path) {
            return asset('storage/feed/'. $this->path);
        }
    }
}
