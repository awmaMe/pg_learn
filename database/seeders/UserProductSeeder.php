<?php

namespace Database\Seeders;

use App\Models\Master\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        foreach (User::query()->where('is_admin', false)->get() as $user) {
            $user->products()->sync($products->random(rand(3, 6)));
        }
    }
}
