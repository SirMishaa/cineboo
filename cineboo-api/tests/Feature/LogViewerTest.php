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

use App\Enums\UserRole;

it('can view the log viewer page', function () {
    /** @var Tests\TestCase $this */
    $this->actingAs(createUser(UserRole::ADMIN))
        ->get(route('log-viewer.index'))
        ->assertSuccessful();
});

it('unauthorized user cannot view the log viewer page', function () {
    $this->actingAs(createUser())
        ->get(route('log-viewer.index'))
        ->assertForbidden();
});
