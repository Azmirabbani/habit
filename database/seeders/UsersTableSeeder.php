<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Habit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user1 = User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password123'),
        ]);

        $user2 = User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'password' => Hash::make('password123'),
        ]);

        $user1->habits()->attach([1, 2]);
        $user2->habits()->attach([3, 4]);
    }
}
