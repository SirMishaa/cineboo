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

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'Inception',
                'description' => 'A thief who enters the dreams of others to steal secrets.',
                'release_date' => '2010-07-16',
                'duration' => 148,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 8.8,
                'imdb_id' => 'tt1375666',
                'tmdb_id' => '27205',
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'Batman faces the Joker, a criminal mastermind.',
                'release_date' => '2008-07-18',
                'duration' => 152,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 9.0,
                'imdb_id' => 'tt0468569',
                'tmdb_id' => '155',
            ],
            [
                'title' => 'Interstellar',
                'description' => 'A team of explorers travels through a wormhole in space.',
                'release_date' => '2014-11-07',
                'duration' => 169,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 8.6,
                'imdb_id' => 'tt0816692',
                'tmdb_id' => '157336',
            ],
            [
                'title' => 'Fight Club',
                'description' => 'An insomniac office worker forms an underground fight club.',
                'release_date' => '1999-10-15',
                'duration' => 139,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 8.8,
                'imdb_id' => 'tt0137523',
                'tmdb_id' => '550',
            ],
            [
                'title' => 'Pulp Fiction',
                'description' => 'The lives of two hitmen intertwine in unexpected ways.',
                'release_date' => '1994-10-14',
                'duration' => 154,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 8.9,
                'imdb_id' => 'tt0110912',
                'tmdb_id' => '680',
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A hacker discovers the reality he lives in is a simulation.',
                'release_date' => '1999-03-31',
                'duration' => 136,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 8.7,
                'imdb_id' => 'tt0133093',
                'tmdb_id' => '603',
            ],
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over several years.',
                'release_date' => '1994-09-23',
                'duration' => 142,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 9.3,
                'imdb_id' => 'tt0111161',
                'tmdb_id' => '278',
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'The life journey of a man with a kind heart.',
                'release_date' => '1994-07-06',
                'duration' => 142,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 8.8,
                'imdb_id' => 'tt0109830',
                'tmdb_id' => '13',
            ],
            [
                'title' => 'Gladiator',
                'description' => 'A betrayed Roman general seeks revenge.',
                'release_date' => '2000-05-05',
                'duration' => 155,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 8.5,
                'imdb_id' => 'tt0172495',
                'tmdb_id' => '98',
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of a crime dynasty transfers control.',
                'release_date' => '1972-03-24',
                'duration' => 175,
                'primary_language' => 'English',
                'country' => 'USA',
                'rating' => 9.2,
                'imdb_id' => 'tt0068646',
                'tmdb_id' => '238',
            ],
        ];

        foreach ($movies as $movie) {
            Movie::create(array_merge($movie, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]));
        }
    }
}
