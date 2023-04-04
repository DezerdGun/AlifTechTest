<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'surname' => 'required',
//            'email' => 'required|email:rfc,dns|unique:users,email',
//            'username' => 'required|unique:users,username',
//            'lastname' => 'required|unique:users,lastname',
//            'address' => 'required',
//            'number' => 'required|min:3',
//            'status' => ['nullable', 'integer', 'max:1'],
//            'password' => 'required|min:8',
//            'password_confirmation' => 'required|same:password'
            'username' => 'required|unique:users,username',
            'surname' => 'required|unique:users,surname',
            'lastname' => 'required|unique:users,lastname',
            'date_of_birth' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username is required!',
            'surname.required' => 'surname is required!',
            'lastname.required' => 'Password is required!',
            'date_of_birth.required' => 'date_of_birth is required!',
            'password.required' => 'required|min:8',
        ];
    }
}
