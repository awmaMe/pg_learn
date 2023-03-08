<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\UpdateDetailsRequest;
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
        if (!auth()->attempt($request->validated())) {
            return back()->with(['flash-message' => 'Invalid username/password', 'flash-message-type' => 'warning']);
        }

        return redirect()->route('auth.dashboard');
    }

    public function update_details(UpdateDetailsRequest $request)
    {
        $request->user()->update($request->validated());

        return redirect()->back()->with(['flash-message' => 'User details have been updated', 'flash-message-type' => 'info']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
