<?php

namespace App\Http\Requests\Task\Contract;

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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',

            'client_information' => 'required|array',

            'client_information.full_name' => 'required|string|max:255',
            'client_information.email' => 'required|email',
            'client_information.phone' => 'required|integer',
            'client_information.address' => 'required|string|max:255',

            'property_information' => 'required|array',

            'property_information.address' => 'required|string|max:255',
            'property_information.description' => 'nullable|string',
            'property_information.price' => 'required|numeric',
            'property_information.other_details' => 'nullable',
        ];
    }
}
