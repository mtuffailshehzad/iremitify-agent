<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAgentValidationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function Rules()
    {
        return [
            'username'	=>	'required',
            'password'	=>	'required|min:4'
        ];
    }
    public function Messages()
    {
        return [
            'username.required'	=>	'User Name is required.',
            'password.required'	=>	'Password is required.',
            'password.min'		=>	'Password minimum length should be 4 characters.',
        ];
    }
}
