<?php

namespace App\Models\LuxeStore;

use App\Mail\LowStockMail;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LuxeStoreProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'description_2',
        'price',
        'sale_price',
        'stock',
        'min_stock',
        'preview_image',
        'second_thumbnail',
        'verbiages_text',
        'notify_email'
    ];

    protected $with = ['images', 'variants'];

    protected static function booted()
    {
        static::updated(function ($product) {
            if ($product->stock <= $product->min_stock) {
                $notification = Notification::where('title', 'Low Stock')->first();
                $emails = $notification->getEmails();
                $line = "The product " . $product->name . " is running low on stock.";
                Mail::to($emails)->send(new LowStockMail($product,  $line));
            }
        });
    }

    public function categories()
    {
        return $this->belongsToMany(LuxeStoreCategory::class, 'luxe_store_product_categories', 'product_id', 'category_id');
    }

    public function images()
    {
        return $this->hasMany(LuxeStoreProductImage::class, 'product_id');
    }

    public function variants()
    {
        return $this->hasMany(LuxeStoreProductVariants::class, 'product_id');
    }

    public function inputs()
    {
        return $this->hasMany(LuxeStoreProductForm::class, 'product_id')->latest();
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        if ($this->id) {
            // $this->attributes['slug'] = LuxeStoreProduct::where([
            //     ['slug', Str::slug($value)],
            //     ['id', '!=', $this->id]
            // ])->count() ? Str::slug($value) . '-' . uniqid() : Str::slug($value);
        } else {
            $this->attributes['slug'] = LuxeStoreProduct::where('slug', Str::slug($value))->count() ? Str::slug($value) . '-' . uniqid() : Str::slug($value);
        }
    }
}
