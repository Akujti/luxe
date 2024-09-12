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
            'email' => 'required|unique:users,email,' . $this->input('id'),
            'password' => 'nullable|min:6|max:255',
            'role' => 'required|in:admin,agent,other',

            'profile' => 'required|array',
            'profile.fullname' => 'required|string',
            'profile.address' => 'nullable|string',
            'profile.phone' => 'nullable|string',

            'profile.facebook' => 'nullable|url',
            'profile.instagram' => 'nullable|url',
            'profile.linkedin' => 'nullable|url',

            'languages' => 'nullable|array',
            'showing_agent' => 'nullable|boolean',
            'profile.avatar' => 'nullable|image',
        ];
    }
}
