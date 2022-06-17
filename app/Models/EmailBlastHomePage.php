<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailBlastHomePage extends Model
{
    use HasFactory;

    protected $table = 'email_blasts_home_page';

    protected $fillable = ['title', 'order', 'image'];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute() {
        if($this->image) {
            return asset('/storage/home-page/'. $this->image);
        }
    }
}
