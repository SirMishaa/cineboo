<?php

/*
 * Copyright © 2024 Cineboo (https://github.com/SirMishaa/cineboo)
 *
 * This file is part of Cineboo, a versatile TV series tracking and recommendation application.
 *
 * Cineboo is licensed under the Creative Commons Attribution-NonCommercial-ShareAlike 4.0
 * International License. You may not use this file except in compliance with the License.
 * To view a copy of the License, visit https://creativecommons.org/licenses/by-nc-sa/4.0/.
 *
 * You are free to:
 * - Share: copy and redistribute the material in any medium or format.
 * - Adapt: remix, transform, and build upon the material.
 *
 * Under the following terms:
 * - Attribution: Give appropriate credit, provide a link to the license, and indicate if changes were made.
 * - NonCommercial: Do not use the material for commercial purposes.
 * - ShareAlike: Distribute your contributions under the same license.
 *
 * This notice must be included in all copies or substantial portions of the file.
 *
 */

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Reset cached roles and permissions
         */
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        app()['cache']->forget('spatie.permission.cache');

        $permissions = [
            'role-create',
            'role-delete',
            'role-read',
            'role-update',
            'user-create',
            'user-delete',
            'user-read',
            'user-update',
            'view-backups',
            'download-backup',
            'delete-backup',
        ];

        /**
         * Create all permission based on the list above
         */
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        /**
         * Supervisor is defined in AuthServiceProvider
         */
        Role::create(['name' => 'Admin'])
            ->givePermissionTo(Permission::all());

        /**
         * Admin role
         */
        Role::create(['name' => 'Moderator'])
            ->givePermissionTo([
                'user-read',
                'role-read',
                'view-backups',
            ]);

        // User
        Role::create(['name' => 'User']);
    }
}
