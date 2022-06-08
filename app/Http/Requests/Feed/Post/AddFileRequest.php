<?php

namespace App\Http\Requests\Feed\Post;

use Illuminate\Foundation\Http\FormRequest;

class AddFileRequest extends FormRequest
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
            'id' => 'required|exists:posts,id',
            'file' => 'required|mimes:'. config('allowed-extension-file.media.images'). ',' . config('allowed-extension-file.media.files')
        ];
    }
}
