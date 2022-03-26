<?php

namespace Database\Seeders;

use App\Models\Permissions;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPermissions = Permissions::all();
        Role::findOrFail(1)->permissions()->sync($adminPermissions->pluck('id'));

    }
}
