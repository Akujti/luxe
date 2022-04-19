<?php

namespace App\Http\Requests\LuxeStore\Order;

use Illuminate\Foundation\Http\FormRequest;

class AddOrderRequest extends FormRequest
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
            'billing' => 'required|array',
            'billing.agent_name' => 'required|string',
            'billing.agent_surname' => 'required|string',
            'billing.company_name' => 'required|string',
            'billing.country' => 'required|string',
            'billing.street_address' => 'required|string',
            'billing.city' => 'required|string',
            'billing.state' => 'required|string',
            'billing.zip_code' => 'required|string',
            'billing.phone' => 'required|string',
            'billing.email' => 'required|string',
            'billing.instructions' => 'required|string',
            'same_as_billing' => 'nullable'
        ];
    }
}
