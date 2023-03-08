<?php

use App\Models\User;
use App\Http\Controllers\Web\Auth\Controller as AuthController;
use App\Http\Controllers\Web\Auth\ProductsController as UserProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = User::all();
    return view('welcome', compact('users'));
})->name('home');

Route::view('register', 'auth.register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');

Route::view('login', 'auth.login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

Route::middleware('auth')
    ->name('auth.')
    ->group(function () {
        Route::view('home', 'auth.dashboard')->name('dashboard');
        Route::view('settings', 'auth.settings')->name('settings');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::prefix('user')->name('user.')->group(function () {
            Route::resource('products', UserProductsController::class)->only('store', 'update', 'destroy');
        });
    });
