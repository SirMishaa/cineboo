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

use App\Models\User;
use Illuminate\Support\Facades\Storage;

it('deletes avatar from storage when user is deleted', function () {
    // Fake the public disk
    Storage::fake('public');

    // Create a user with an avatar and delete it
    $user = User::factory()->create(['avatar_url' => 'avatars/sample-avatar.jpg']);
    $user->delete();

    // Assert the avatar was deleted
    Storage::disk('public')->assertMissing('avatars/sample-avatar.jpg');
});

it('deletes the old avatar when avatar_url is updated', function () {
    // Fake the public disk
    Storage::fake('public');

    // Create a user with an avatar and update it
    $user = User::factory()->create(['avatar_url' => 'avatars/old-avatar.jpg']);
    Storage::disk('public')->put('avatars/old-avatar.jpg', 'fake content');
    Storage::disk('public')->put('avatars/new-avatar.jpg', 'new fake content');
    $user->update(['avatar_url' => 'avatars/new-avatar.jpg']);

    // Old avatar should be deleted and new avatar should exist
    Storage::disk('public')->assertMissing('avatars/old-avatar.jpg');
    Storage::disk('public')->assertExists('avatars/new-avatar.jpg');
});
