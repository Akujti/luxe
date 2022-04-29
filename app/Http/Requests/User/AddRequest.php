<?php

namespace App\Http\Requests\User;

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
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|max:255',
            'role' => 'required|in:admin,agent,other',

            'profile' => 'required|array',
            'profile.fullname' => 'required|string',
            'profile.address' => 'nullable|string',
            'profile.phone' => 'nullable|string',
            'languages' => 'nullable|array',
            'profile.avatar' => 'nullable|image',
        ];
    }
}
