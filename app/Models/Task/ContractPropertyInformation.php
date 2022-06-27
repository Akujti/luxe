<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractPropertyInformation extends Model
{
    use HasFactory;
    protected $fillable = ['address', 'description', 'price', 'other_details'];
}
