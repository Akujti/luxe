<?php

namespace App\Models\CMA;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CmaReportListing extends Model
{
    use HasFactory;
    protected $table = 'cma_report_listings';

    protected $fillable = ['cma_report_id', 'listing_id'];
}
