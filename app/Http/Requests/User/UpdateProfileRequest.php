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
            'profile' => 'required|array',
            'profile.fullname' => 'required|string',
            'profile.address' => 'required|string',
            'profile.phone' => 'required|string',
            'languages' => 'required|array',
            'profile.avatar' => 'nullable|image',
        ];
    }
}
