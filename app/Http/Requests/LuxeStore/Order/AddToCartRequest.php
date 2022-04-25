<?php

namespace App\Http\Requests\LuxeStore\Order;

use App\Models\LuxeStore\LuxeStoreProduct;
use Illuminate\Foundation\Http\FormRequest;

class AddToCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $qty = LuxeStoreProduct::findOrFail($this->input('product_id'))->stock;
        return [
            'product_id' => 'required|exists:luxe_store_products,id',
            'quantity' => "required|integer|min:1|max:$qty"
        ];
    }
}
