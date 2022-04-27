<?php

namespace App\Http\Requests\LuxeStore\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        return [
            'id' => 'required|exists:luxe_store_products,id',
            'name' => 'required|max:200',
            'description' => 'nullable',
            'description_2' => 'nullable',
            'price' => 'nullable|numeric',
            'sale_price' => 'nullable|numeric',
            'stock' => 'required',
            'preview_image' => 'nullable|image',
            'categories' => 'nullable|array',
            'variant_name' => 'nullable',

            'variant_values' => 'nullable|array',
            'variant_values.*.value' => 'required|string',
            'variant_values.*.price' => 'required|numeric',

            'images' => 'nullable|array'
        ];
    }
}