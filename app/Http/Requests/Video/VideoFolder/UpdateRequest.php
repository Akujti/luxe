<?php

namespace App\Http\Requests\Video\VideoFolder;

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
            'id' => 'required|exists:video_folders,id',
            'title' => 'required|unique:video_folders,title',
            'parent_id' => 'nullable|exists:video_folders,id'
        ];
    }
}
