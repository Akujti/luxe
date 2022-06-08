<?php

namespace App\Http\Requests\Feed\Post;

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
            'title' => 'nullable|max:255',
            'body' => 'required|string',
            'files' => 'array|nullable',
            'files.*' => 'nullable|mimes:'. config('allowed-extension-file.media.images'). ',' . config('allowed-extension-file.media.files'),

            'tags' => 'nullable'
        ];
    }
}
