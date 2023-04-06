<?php

namespace App\Models\LuxeStore;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LuxeStoreProductForm extends Model
{
    use HasFactory;

    protected $table = 'luxe_store_product_form';
    protected $fillable = [
        'input_name',
        'input_value',
        'product_id',
        'is_file'
    ];

    public function setInputNameAttribute($value)
    {
        $this->attributes['input_name'] = $value;
        if($this->id) {
            $this->attributes['input_value'] = LuxeStoreProductForm::where([
                ['input_value', Str::slug($value)],
                ['id', '!=', $this->id]
            ])->count() ? Str::slug($value) .'-'. uniqid() : Str::slug($value);
        } else {
            $this->attributes['input_value'] = LuxeStoreProductForm::where('input_value', Str::slug($value))->count() ? Str::slug($value) .'-'. uniqid() : Str::slug($value);
        }
    }
}
