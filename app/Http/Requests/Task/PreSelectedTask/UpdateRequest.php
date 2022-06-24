<?php

namespace App\Http\Requests\Task\PreSelectedTask;

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
            'id' => 'required|exists:pre_selected_tasks,id',
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date'
        ];
    }
}
