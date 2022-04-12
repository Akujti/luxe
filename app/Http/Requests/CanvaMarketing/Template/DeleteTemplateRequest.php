<?php

namespace App\Http\Requests\CanvaMarketing\Template;

use Illuminate\Foundation\Http\FormRequest;

class DeleteTemplateRequest extends FormRequest
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
            'id' => 'required|exists:marketing_canva_templates,id',
        ];
    }
}
