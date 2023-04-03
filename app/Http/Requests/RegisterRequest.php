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
            'surname' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'lastname' => 'required|unique:users,lastname',
            'address' => 'required',
            'number' => 'required|min:3',
            'status' => ['nullable', 'integer', 'max:1'],
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Email is required!',
            'surname.required' => 'surname is required!',
            'lastname.required' => 'Password is required!',
            'address.required' => ['nullable', 'string', 'max:255'],
            'number.required' => ['nullable', 'integer', 'max:32'],
            'status' => ['nullable', 'integer', 'max:1'],
            'password.required' => 'required|min:8',
        ];
    }
}
