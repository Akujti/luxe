<?php

namespace App\Http\Requests\Video\VideoFile;

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
            'title' => 'required|string',
            'file' => 'required|file',
            'type' => 'nullable|string',
            'video_id' => 'required|exists:videos,id'
        ];
    }
}