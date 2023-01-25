<?php

namespace App\Http\Requests\Auth;

use App\Traits\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
        ];
    }
}
