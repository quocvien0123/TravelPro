<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'password' => Hash::make('123'),
            'email' => 'admin@gmail.com',
            'is_admin' => true,
        ]);

        User::create([
            'username' => 'vien',
            'password' => Hash::make('123'),
            'email' => 'vien@gmail.com',
            'is_admin' => false,
        ]);
    }
}
