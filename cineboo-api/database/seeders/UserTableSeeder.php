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

use App\Enums\UserRole;
use App\Models\User;
use App\Models\Watchlist;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Super Admin
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        $admin->assignRole(UserRole::ADMIN->value);

        // Moderator
        $moderator = User::factory()->create([
            'name' => 'Moderator',
            'email' => 'moderator@example.com',
        ]);
        $moderator->assignRole(UserRole::MODERATOR->value);

        // User
        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
        ]);
        $user->assignRole(UserRole::USER->value);
        Watchlist::factory()->count(10)->create(['user_id' => $user->id]);

        collect([$admin, $moderator, $user])->each(function ($user) {
            Watchlist::factory()->count(3)->create(['user_id' => $user->id]);
        });
    }
}
