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

return [
    /*
    |--------------------------------------------------------------------------
    | Table Columns
    |--------------------------------------------------------------------------
    */

    'column.guard_name' => 'Guard-Name',
    'column.name' => 'Name',
    'column.permissions' => 'Berechtigungen',
    'column.roles' => 'Rollen',
    'column.updated_at' => 'Aktualisiert am',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.guard_name' => 'Guard-Name',
    'field.name' => 'Name',
    'field.permissions' => 'Berechtigungen',
    'field.select_all.message' => 'Aktivierung aller Berechtigungen, die derzeit für diese Rolle <span class="text-primary font-medium">aktiviert</span> sind',
    'field.select_all.name' => 'Alle auswählen',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'nav.role.label' => 'Rollen',
    'resource.label.role' => 'Rolle',
    'resource.label.roles' => 'Rollen',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'Entitäten',
    'resources' => 'Ressourcen',
    'widgets' => 'Widgets',
    'pages' => 'Seiten',
    'custom' => 'benutzerdefinierte Berechtigungen',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'Sie haben keine Zugangsberechtigung',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'Anzeigen',
        'view_any' => 'Alle anzeigen',
        'create' => 'Erstellen',
        'update' => 'Bearbeiten',
        'delete' => 'Löschen',
        'delete_any' => 'Alle löschen',
        'force_delete' => 'Endgültig löschen',
        'force_delete_any' => 'Alle endgültig löschen',
        // 'reorder' => 'Reorder',
        // 'replicate' => 'Replicate',
        'restore' => 'Wiederherstellen',
        'restore_any' => 'Alle wiederherstellen',
    ],
];
