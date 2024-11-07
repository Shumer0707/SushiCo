<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngrRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            "id" => '',
            "text_ru" => 'required|string|min:2',
            "text_ro" => 'required|string|min:2',
        ];
    }
}
