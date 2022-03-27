<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'slug' => 'admin',
                'description' => 'Administrator role',
            ],
            [
                'name' => 'moderator',
                'display_name' => 'Moderator',
                'slug' => 'moderator',
                'description' => 'Moderator role',
            ],
            [
                'name' => 'user',
                'display_name' => 'User',
                'slug' => 'user',
                'description' => 'User role',
            ],
        ];

        Role::insert($roles);
    }
}
