<?php

namespace App\Http\Requests\Video\Video;

use Illuminate\Foundation\Http\FormRequest;

class AddReviewCommentRequest extends FormRequest
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
            'comment' => 'required|string',
            'video_id' => 'required|exists:videos,id'
        ];
    }
}
