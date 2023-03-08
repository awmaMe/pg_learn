<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create(['name' => 'Admin', 'username' => 'admin', 'password' => 'password', 'is_admin' => true]);
        User::factory(10)->sequence(fn (Sequence $sequence) => ['username' => 'user_' . $sequence->index + 1])->create();
    }
}
