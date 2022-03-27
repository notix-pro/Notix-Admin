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
            // Permissions for top level admins. Something like change site info (name, description etc.), manage users, everything else what admin can do.
            [
                'name' => 'admin_site_manage',
                'display_name' => 'Site management',
                'description' => 'User with this permission can change site info (name, description etc.)',
                'slug' => 'admin-site-manage',
            ],
            [
                'name' => 'admin_users_manage',
                'display_name' => 'Users management',
                'description' => 'User with this permission can manage users (add, edit, ban, delete).',
                'slug' => 'admin-users-manage',
            ],
            [
                'name' => 'admin_manage_roles',
                'display_name' => 'Roles management',
                'description' => 'User with this permission can manage roles (add, edit, delete).',
                'slug' => 'admin-manage-roles',
            ],
            [
                'name' => 'admin_manage_permissions',
                'display_name' => 'Permissions management',
                'description' => 'User with this permission can manage permissions (add, edit, delete).',
                'slug' => 'admin-manage-permissions',
            ],
            [
                'name' => 'admin_manage_user_roles',
                'display_name' => 'User roles management',
                'description' => 'User with this permission can manage user roles (add, edit, delete).',
                'slug' => 'admin-manage-user-roles',
            ],
            // Permissions for other admins.
            [
                'name' => 'moderator_manage_messages',
                'display_name' => 'Messages management',
                'description' => 'User with this permission can manage messages (respond, delete).',
                'slug' => 'moderator-manage-reports',
            ],
            [
                'name' => 'moderator_manage_comments',
                'display_name' => 'Comments management',
                'description' => 'User with this permission can manage comments (hide, delete).',
                'slug' => 'moderator-manage-comments',
            ],
            [
                'name' => 'moderator_user_profile_management',
                'display_name' => 'Manage User Profiles',
                'description' => 'Manage user profiles',
                'slug' => 'moderator-user-profile-management',
            ],

            // Permissions for users. Something like change nickname, password, email, etc.
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
        ];

        Permissions::insert($permissions);
    }
}
