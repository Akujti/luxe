<?php

namespace App\Models\Task;

use App\Models\Task\Task;
use App\Models\Feed\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Task\ContractClientInformation;
use App\Models\Task\ContractPropertyInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contract extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'status', 'author_id'];

    public function client_information() {
        return $this->hasOne(ContractClientInformation::class);
    }

    public function property_information() {
        return $this->hasOne(ContractPropertyInformation::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function documents()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
