<?php

namespace App\Http\Requests\LuxeStore\Product;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'name' => 'required|min:5|max:200',
            'description' => 'nullable',
            'description_2' => 'nullable',
            'price' => 'nullable|numeric',
            'stock' => 'required',
            'preview_image' => 'nullable|image',
            'categories' => 'required|array',

            'variant_values' => 'required|array',
            'variant_values.*.value' => 'required|string',
            'variant_values.*.price' => 'required|numeric'
        ];
    }
}
