<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();

        $adminRole = Role::where('role_name', 'Admin')->first();
        $user = User::first();

        if ($adminRole && $user)
        {
            $user->roles()->attach($adminRole->id);
        }

        $nonAdminRoles = Role::where('role_name', '!=', 'Admin')->get();
        $nonAdminUsers = User::whereDoesntHave('roles', function($query) {
            $query->where('role_name', 'Admin');
        })->get();

        foreach($nonAdminUsers as $nonAdminUser) 
        {
            $randomRoles = $nonAdminRoles->random(rand(1, 2));
            $nonAdminUser->roles()->attach($randomRoles);
        }
    }
}
