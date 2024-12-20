<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class FormBasketRequest extends FormRequest
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
            'username' => 'required|min:2|max:20',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|confirmed|min:6|max:10',
            'logistics' => 'required',
            'address' => 'bail|required_unless:logistics,self_pickup',
            'building' => 'required',
            'details' => 'max:200',
            'payment' => 'required|max:100',
            'address_home' => 'bail|required_unless:logistics,self_pickup|integer',
            'address_apartment' => 'bail|integer',Rule::requiredIf(function(){
                return 'building' === 'house' || 'logistics' === 'self_pickup';
            }),                  
        ];
    }
}
