<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'email' => 'required|unique:email|email',
            'password' => 'required',
            'password_confirmation' => ['required', function ($password, $password_confirmation, $fail){
                if (strcmp($password, $password_confirmation) == 0){
                    $fail('Confirm Password tidak sama dengan Password');
                }
            }],
        ];
    }

    public function message(){

        return[
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password_confirmation.required' => 'Confirm password wajib diisi',
        ];
    }
}
