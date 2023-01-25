<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function register(RegisterRequest $request)
    {
        User::query()->create($request->validated());

        return redirect()->route('home');
    }

    public function login(LoginRequest $request)
    {
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
