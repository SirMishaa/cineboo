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

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\UserRole;
use App\Observers\UserObserver;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Jeffgreco13\FilamentBreezy\Traits\TwoFactorAuthenticatable;
use Spatie\Permission\Traits\HasRoles;

#[ObservedBy([UserObserver::class])]
class User extends Authenticatable implements FilamentUser, HasAvatar
{
    use HasFactory, HasRoles, Notifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role',
        'email',
        'password',
        'avatar_url',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => UserRole::class,
        ];
    }

    /**
     * Get the user's avatar URL.
     *
     * @return string|null Returns the user's avatar URL.
     */
    public function getFilamentAvatarUrl(): ?string
    {
        return $this->avatar_url ? Storage::url($this->avatar_url) : null;
    }

    /**
     * Checks if a user can access a panel based on their email and email verification status.
     *
     * @param  Panel  $panel  The panel object that the user is trying to access.
     * @return bool Returns a boolean value indicating if the user can access the panel.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin') {
            return $this->hasRole([UserRole::ADMIN, UserRole::MODERATOR]);
        }

        // @codeCoverageIgnoreStart
        return false;
        // @codeCoverageIgnoreEnd
    }
}
