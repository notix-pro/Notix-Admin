<?php

namespace Database\Seeders;

use App\Models\Permissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'user_management',
                'display_name' => 'User Management',
                'description' => 'Manage users',
                'slug' => 'user-management',
            ],
            [
                'name' => 'permission_management',
                'display_name' => 'Manage Permissions',
                'description' => 'Manage permissions',
                'slug' => 'permission-management',
            ],
            [
                'name' => 'role_management',
                'display_name' => 'Manage Roles',
                'description' => 'Manage roles',
                'slug' => 'role-management',
            ],
            [
                'name' => 'user_role_management',
                'display_name' => 'Manage User Roles',
                'description' => 'Manage user roles',
                'slug' => 'user-role-management',
            ],
            [
                'name' => 'user_permission_management',
                'display_name' => 'Manage User Permissions',
                'description' => 'Manage user permissions',
                'slug' => 'user-permission-management',
            ],
            [
                'name' => 'user_profile_management',
                'display_name' => 'Manage User Profiles',
                'description' => 'Manage user profiles',
                'slug' => 'user-profile-management',
            ],
            [
                'name' => 'user_profile_view',
                'display_name' => 'View User Profiles',
                'description' => 'View user profiles',
                'slug' => 'user-profile-view',
            ],
            [
                'name' => 'user_profile_edit',
                'display_name' => 'Edit User Profiles',
                'description' => 'Edit user profiles',
                'slug' => 'user-profile-edit',
            ],
            [
                'name' => 'user_profile_delete',
                'display_name' => 'Delete User Profiles',
                'description' => 'Delete user profiles',
                'slug' => 'user-profile-delete',
            ],
            [
                'name' => 'user_profile_create',
                'display_name' => 'Create User Profiles',
                'description' => 'Create user profiles',
                'slug' => 'user-profile-create',
            ],
            [
                'name' => 'admin_management',
                'display_name' => 'Manage Admins',
                'description' => 'Manage admins',
                'slug' => 'admin-management',
            ],
            [
                'name' => 'admin_site_management',
                'display_name' => 'Manage Site',
                'description' => 'Manage site',
                'slug' => 'admin-site-management',
            ],
        ];

        Permissions::insert($permissions);
    }
}
