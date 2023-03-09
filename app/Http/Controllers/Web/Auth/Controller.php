<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\UpdateDetailsRequest;
use App\Models\User;

class Controller extends BaseController
{
    public function register(RegisterRequest $request)
    {
        User::query()->create($request->validated());

        return redirect()->route('home');
    }

    public function login(LoginRequest $request)
    {
        if (!auth()->attempt($request->validated())) {
            return back()->with(flash_message('Invalid username/password', 'warning'));
        }

        return redirect()->route('auth.dashboard');
    }

    public function update_details(UpdateDetailsRequest $request)
    {
        $request->user()->update($request->validated());

        return redirect()->back()->with(flash_message('User details have been updated'));
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
