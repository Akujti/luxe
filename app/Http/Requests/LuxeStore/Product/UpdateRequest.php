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
            'name' => 'required|min:5|max:200',
            'description' => 'nullable',
            'description_2' => 'nullable',
            'price' => 'nullable|numeric',
            'stock' => 'required',
            'preview_image' => 'nullable|image'
        ];
    }
}
