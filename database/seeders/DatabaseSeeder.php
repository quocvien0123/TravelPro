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

<<<<<<< HEAD
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
=======
        DB::table('users')->insert([
            'username' => 'vien',
            'password' => Hash::make('123'),
            'email' => 'vien@gmail.com',
            'is_admin' => '1',
>>>>>>> 9fbfc751eaf8de63733e10682172e17ee6f5a0f6
        ]);
    }
}
