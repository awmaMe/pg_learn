<?php

namespace App\Http\Requests\Auth;

use App\Traits\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    use BaseRequest;
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ];
    }
}
