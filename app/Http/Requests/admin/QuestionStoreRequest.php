<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class QuestionStoreRequest extends FormRequest
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
            'question' => 'required|unique:questions',
            'type' => 'required',
            'open_answer' => 'required_if:type,A',
            'A' => 'required_if:type,F',
            'B' => 'required_if:type,F',
            'C' => 'required_if:type,F',
            'D' => 'required_if:type,F',
            'feedback' => 'required_if:type,F',

        ];
    }
}
