<?php

namespace App\Models\Task;

use App\Models\Task\Task;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task\ContractClientInformation;
use App\Models\Task\ContractPropertyInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
