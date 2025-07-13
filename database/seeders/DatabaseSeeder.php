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

        // আগের admin থাকলে delete করবে (এটা না থাকায় error আসছে)
        User::where('email', 'admin@gmail.com')->delete();

        // তারপর নতুনভাবে create করবে
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
    }
}
