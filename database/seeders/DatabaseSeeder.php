<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleSeeder::class);

        
        User::where('email', 'admin@gmail.com')->delete();

        
        User::factory()->create([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => null,
            'role_id' => 2,
            'phone' => '01700000000',
            'address' => 'Dhaka',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
        
        
        
        User::where('email', 'superadmin@gmail.com')->delete();
        User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'role_id' => 3,
            'phone' => '01800000000',
            'address' => 'Dhaka',
            'password' => bcrypt('superpassword'),
            'remember_token' => Str::random(10),
        ]);;
    }
}
