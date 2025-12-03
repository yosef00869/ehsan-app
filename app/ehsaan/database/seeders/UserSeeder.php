<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'Admin Ehsaan',
            'email' => 'admin@ehsaan.org',
            'password' => Hash::make('password'),
            'phone_number' => '01000000001',
            'role' => 'admin',
            'address' => 'Cairo, Egypt',
            'city' => 'Cairo',
            'gender' => 'male',
            'is_active' => true,
        ]);

        // Staff User
        User::create([
            'name' => 'Staff Member',
            'email' => 'staff@ehsaan.org',
            'password' => Hash::make('password'),
            'phone_number' => '01000000002',
            'role' => 'staff',
            'address' => 'Giza, Egypt',
            'city' => 'Giza',
            'gender' => 'female',
            'is_active' => true,
        ]);

        // Donor Users
        User::create([
            'name' => 'Ahmed Ali',
            'email' => 'ahmed@example.com',
            'password' => Hash::make('password'),
            'phone_number' => '01000000003',
            'role' => 'donor',
            'address' => 'Alexandria, Egypt',
            'city' => 'Alexandria',
            'gender' => 'male',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Sara Mohamed',
            'email' => 'sara@example.com',
            'password' => Hash::make('password'),
            'phone_number' => '01000000004',
            'role' => 'donor',
            'address' => 'Aswan, Egypt',
            'city' => 'Aswan',
            'gender' => 'female',
            'is_active' => true,
        ]);
    }
}