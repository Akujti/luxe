<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingCoordinatorPackage extends Model
{
    use HasFactory;

    protected $fillable = ['package', 'listing_coordinator_id', 'price'];

    public function coordinator()
    {
        return $this->belongsTo(ListingCoordinator::class, 'listing_coordinator_id');
    }
}
