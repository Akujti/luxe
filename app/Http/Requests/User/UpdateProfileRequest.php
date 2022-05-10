<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'id' => 'required|exists:users,id',
            'profile' => 'nullable|array',
            'profile.fullname' => 'nullable|string',
            'profile.address' => 'nullable|string',
            'profile.phone' => 'nullable|string',
            'languages' => 'nullable|array',
            'profile.avatar' => 'nullable|image',
            'optin' => 'nullable',
        ];
    }
}
