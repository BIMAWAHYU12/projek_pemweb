<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat Akun Admin
        User::firstOrCreate(
            ['email' => 'admin@proyekbaru.com'],
            [
                'name' => 'Admin Proyek',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );

        // Membuat Akun Pengguna Biasa
        User::firstOrCreate(
            ['email' => 'user@proyekbaru.com'],
            [
                'name' => 'User Biasa',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'email_verified_at' => now(),
            ]
        );
    }
}