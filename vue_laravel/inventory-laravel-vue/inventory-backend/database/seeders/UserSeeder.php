<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'role_id' => 1,
                'name' => "Admin",
                'email' => "admin@gmail.com",
                'phone' => '0178888888',
                'nid' => 'nid-1',
                'address' => 'Gulshan-1',
                'is_active' => true,
                'company_name' => "Aracex",
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'role_id' => 1,
                'name' => "Admin",
                'email' => "admin@gmail.com",
                'phone' => '0178888888',
                'nid' => 'nid-1',
                'address' => 'Gulshan-1',
                'is_active' => true,
                'company_name' => "Aracex",
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
        ];
        User::insert($user);
    }
}
