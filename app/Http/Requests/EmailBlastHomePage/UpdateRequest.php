<?php

namespace App\Http\Requests\EmailBlastHomePage;

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
            'id' => 'required|exists:email_blasts_home_page,id',
            'title' => 'required|max:255',
            'order' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp'
        ];
    }
}
