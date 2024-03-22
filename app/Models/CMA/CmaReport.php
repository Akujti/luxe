<?php

namespace App\Models\CMA;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CmaReport extends Model
{
    use HasFactory;

    protected $table = 'cma_report';

    protected $fillable = ['user_id', 'address', 'path'];

    protected $appends = ['report_url'];

    public function listings()
    {
        return $this->hasMany(CmaReportListing::class, 'cma_report_id');
    }

    public function getReportUrlAttribute()
    {
        return asset('storage/' . $this->path);
    }
}
