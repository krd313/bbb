<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRole = Role::create(['name' => 'user']);
        $adminRole = Role::create(['name' => 'admin']);
        $superAdminRole = Role::create(['name' => 'super_admin']);

        // User::create([
        DB::table('users')->insert([
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'role_id' => $userRole->id,

            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'role_id' => $adminRole->id,
            ],
            [
                'name' => 'super_admin',
                'email' => 'super_admin@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'role_id' => $superAdminRole->id,

            ]

        ]);
    }
}
