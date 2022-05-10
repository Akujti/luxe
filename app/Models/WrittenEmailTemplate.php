<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class WrittenEmailTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type'
    ];

    public function items()
    {
        return $this->hasMany(WrittenEmailTemplateItem::class, 'folder_id');
    }
}
