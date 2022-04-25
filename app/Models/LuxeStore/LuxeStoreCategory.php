<?php

namespace App\Models\LuxeStore;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\LuxeStore\LuxeStoreProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LuxeStoreCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'slug'];

    public function products() {
        return $this->belongsToMany(LuxeStoreProduct::class, 'luxe_store_product_categories', 'category_id', 'product_id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        if($this->id) {
            $this->attributes['slug'] = LuxeStoreCategory::where([
                ['slug', Str::slug($value)],
                ['id', '!=', $this->id]
            ])->count() ? Str::slug($value) .'-'. uniqid() : Str::slug($value);
        } else {
            $this->attributes['slug'] = LuxeStoreCategory::where('slug', Str::slug($value))->count() ? Str::slug($value) .'-'. uniqid() : Str::slug($value);
        }
    }
}
