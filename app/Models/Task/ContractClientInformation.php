<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractClientInformation extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'phone', 'address'];
}
