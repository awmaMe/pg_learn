<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\Master\Product;
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

    public function update(Request $request, Product $product)
    {
        $attributes = $request->validate(['name' => 'required']);

        $product->update($attributes);

        return redirect()->route('auth.dashboard');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('auth.dashboard');
    }
}
