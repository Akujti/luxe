<?php

namespace App\Http\Requests\LuxeStore\Coupon;

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
            'id' => 'required|exists:luxe_store_coupon_codes,id',
            'code' => 'required',
            'price' => 'required|numeric'
        ];
    }
}
