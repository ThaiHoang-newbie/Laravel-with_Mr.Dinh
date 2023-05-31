<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'username' => 'required|alpha|min:6|max:10',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Bắt buộc phải nhập username bé ơi',
            'username.alpha' => 'Không được nhập số đâu bé ơi',
            'username.min' => 'Username ít nhất 6 kí tự bé ơi',
            'username.max' => 'Username nhiều nhất 10 kí tự bé ơi',
            'email.required' => 'Bắt buộc phải nhập email bé ơi',
            'email.email' => 'Bắt buộc phải là email bé ơi',
            'password.required' => 'Bắt buộc phải nhập password bé ơi',
            'password.min' => 'Password ít nhất 8 kí tự bé ơi',
            'password_confirmation.same' => 'Bắt buộc phải nhập giống password bé ơi',
            'password_confirmation.required' => 'Bắt buộc phải nhập password confirmation bé ơi',
        ];
    }
}
