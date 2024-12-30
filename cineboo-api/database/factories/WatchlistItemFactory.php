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

use App\Models\Movie;
use App\Models\Watchlist;
use App\Models\WatchlistItem;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/** @extends Factory<WatchlistItem> */
class WatchlistItemFactory extends Factory
{
    protected $model = WatchlistItem::class;

    public function definition(): array
    {
        /** @var Movie $watchable */
        $watchable = $this->faker->randomElement([
            Movie::factory()->create(),
        ]);

        return [
            'is_watched' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'watchlist_id' => Watchlist::factory(),
            'watchable_id' => $watchable->id,
            'watchable_type' => get_class($watchable),
        ];
    }

    public function withMovie(): Factory
    {
        $movie = Movie::factory()->create();

        return $this->state([
            'watchable_id' => $movie->id,
            'watchable_type' => Movie::class,
        ]);
    }
}
