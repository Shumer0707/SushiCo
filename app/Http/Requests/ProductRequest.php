<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "title" => 'required|string|min:2',
            "description_ru" => 'string|min:2',
            "description_ro" => 'string|min:2',
            "gram" => 'required|integer',
            "price" => 'required|integer',
            "category" => 'required|string',
            "img" => 'required|image:jpg,jpeg,png',
            "ingr" => 'required',
        ];
    }
}
