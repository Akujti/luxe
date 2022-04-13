<?php

namespace App\Http\Requests\LuxeStore\Category;

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
            'id' => 'required|exists:luxe_store_categories,id',
            'name' => 'required|min:5|max:200',
            'image' => 'nullable|image'
        ];
    }
}
