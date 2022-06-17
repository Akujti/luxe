<?php

namespace App\Http\Requests\EmailBlastHomePage;

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
            'title' => 'required|max:255',
            'order' => 'required|numeric',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp,webp'
        ];
    }
}
