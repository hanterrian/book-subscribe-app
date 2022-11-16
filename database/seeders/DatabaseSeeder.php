<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost.loc',
            'password' => \Hash::make('password'),
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@localhost.loc',
            'password' => \Hash::make('password'),
        ]);

        $admin->assignRole($adminRole);
        $user->assignRole($userRole);
    }
}
