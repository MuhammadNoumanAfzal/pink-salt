<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primary Real Admin Account
        User::updateOrCreate(
            ['email' => 'saltora1329@gmail.com'],
            [
                'name' => 'Saltora Master Admin',
                'password' => Hash::make('Saltora@Admin2026#'),
                'email_verified_at' => now(),
            ]
        );

        // Secondary fallback Admin Account
        User::updateOrCreate(
            ['email' => 'admin@saltora.com'],
            [
                'name' => 'Saltora Admin Desk',
                'password' => Hash::make('Saltora@Admin2026#'),
                'email_verified_at' => now(),
            ]
        );
    }
}
