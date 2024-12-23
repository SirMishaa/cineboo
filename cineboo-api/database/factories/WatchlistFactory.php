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

namespace Database\Factories;

use App\Models\User;
use App\Models\Watchlist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/** @extends Factory<Watchlist> */
class WatchlistFactory extends Factory
{
    protected $model = Watchlist::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'keywords' => $this->faker->words(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => User::factory(),
        ];
    }
}
