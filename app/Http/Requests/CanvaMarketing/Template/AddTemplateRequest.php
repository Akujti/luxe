<?php

namespace App\Http\Requests\CanvaMarketing\Template;

use Illuminate\Foundation\Http\FormRequest;

class AddTemplateRequest extends FormRequest
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
            'title' => 'required',
            'image' => 'required|image',
            'url' => 'required|url',
            'template_id' => 'required|exists:marketing_canva_categories,id',
            'order' => 'required'
        ];
    }
}
