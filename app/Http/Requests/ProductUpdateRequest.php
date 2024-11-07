<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            "id" => 'required|integer',
            "title" => 'required|string|min:2',
            "description_ru" => 'required|string|min:2',
            "description_ro" => 'required|string|min:1',
            "gram" => 'required|integer',
            "price" => 'required|integer',
            "category" => 'required|string',
            "img" => 'image:jpg,jpeg,png',
            "ingr" => 'required',
        ];
    }
}
