<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test Example',
            'username' => 'example',
            'password' => Hash::make('example'),
            'last_login_at' => now(),
        ]);
    }
}
