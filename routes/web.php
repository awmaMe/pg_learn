<?php

use App\Models\User;
use App\Http\Controllers\Web\Auth\Controller as AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = User::all();
    return view('welcome', compact('users'));
})->name('home');

Route::view('register', 'auth.register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');

Route::view('login', 'auth.login');
