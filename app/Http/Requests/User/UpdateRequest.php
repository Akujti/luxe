<?php

namespace App\Http\Requests\User;

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
            'id' => 'required|exists:users,id',
            'email' => 'required|unique:users,email,'. $this->input('id'),
            'password' => 'nullable|min:6|max:255',
            'role' => 'required|in:admin,agent,other',

            'profile' => 'required|array',
            'profile.fullname' => 'required|string',
            'profile.address' => 'required|string',
            'profile.phone' => 'required|string',
            'languages' => 'required|array',
            'profile.avatar' => 'nullable|image',
        ];
    }
}
