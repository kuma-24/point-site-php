<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '「Title」が空白です。',
            'title.min' => '「Title」が :min 文字以下です。',
            'body.required' => '「Body」が空白です。',
        ];
    }
}
