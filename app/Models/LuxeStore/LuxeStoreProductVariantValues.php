<?php

namespace App\Models\LuxeStore;

use App\Mail\LowStockMail;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class LuxeStoreProductVariantValues extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'image',
        'price',
        'sale_price',
        'variant_id',
        'stock',
        'min_stock',
    ];

    protected static function booted()
    {
        static::updated(function ($variant_value) {
            if ($variant_value->stock <= $variant_value->min_stock) {
                $notification = Notification::where('title', 'Low Stock')->first();
                $emails = $notification->getEmails();
                $variant = LuxeStoreProductVariants::find($variant_value->variant_id);
                $product = LuxeStoreProduct::find($variant->product_id);
                $line = "The variant " . $variant_value->value . " of the product " . $product->name . " is running low on stock.";
                Mail::to($emails)->send(new LowStockMail($product,  $line));
            }
        });
    }
}
