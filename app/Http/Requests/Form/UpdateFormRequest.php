<?php

namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFormRequest extends FormRequest
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
            'id' => 'required|exists:forms,id',
            'title' => 'required|max:255',
            'path' => 'nullable',
            'verbiages_text' => 'nullable',
            'verbiages_title' => 'nullable',
            'after_submit_verbiages_text' => 'nullable',
            'email_verbiages_text' => 'nullable',
            'after_submit_verbiages_title' => 'nullable'
        ];
    }
}
