<?php

namespace App\Http\Requests\Video\VideoFile;

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
            'id' => 'required|exists:video_files,id',
            'title' => 'required|string',
            'file' => 'nullable|file',
            'type' => 'nullable|string',
        ];
    }
}
