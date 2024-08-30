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
            'name' => 'required|max:200',
            'description' => 'nullable',
            'description_2' => 'nullable',
            'verbiages_text' => 'nullable',
            'price' => 'nullable|numeric',
            'sale_price' => 'nullable|numeric',
            'notify_email' => 'nullable|email',
            'stock' => 'required',
            'preview_image' => 'nullable|image',
            'categories' => 'required|array',
            'variant_name' => 'nullable',

            'variant_values' => 'nullable|array',
            'variant_values.*.value' => 'required|string',
            'variant_values.*.price' => 'required|numeric',

            // 'form' => 'nullable|array',
            // 'form.input_name' => 'required|string',
            // 'form.is_file' => 'required|bool',

            'images' => 'nullable|array'
        ];
    }
}
