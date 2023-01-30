<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->validate(['name' => 'required']);

        $request->user()->products()->firstOrCreate($attributes);

        return redirect()->route('auth.dashboard');
    }
}
