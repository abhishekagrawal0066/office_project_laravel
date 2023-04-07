<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class collageRagistration extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'mothername' => 'required',
            'fathername' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'state'=> 'required',
            'city' => 'required',
            'dob' => 'required',
            'pincode' => 'required',
            'course' => 'required',
            'email' => 'required'
        ];
    }
}
