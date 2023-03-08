<?php

namespace App\Http\Requests\Auth;

use App\Traits\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDetailsRequest extends FormRequest
{
    use BaseRequest;

    public function prepareForValidation()
    {
        // remove all nullable attributes
        $this->replace(array_filter($this->all()));
    }

    public function rules()
    {
        return [
            'name' => 'nullable',
            'username' => 'nullable|unique:users,username,' . auth()->id(),
            'current_password' => 'required|current_password:web|exclude',
            'password' => 'nullable|confirmed',
        ];
    }
}
