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

    'column.name' => 'Név',
    'column.guard_name' => 'Guard név',
    'column.roles' => 'Jogosultságok',
    'column.permissions' => 'Engedélyek',
    'column.updated_at' => 'Frissítve',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'Név',
    'field.guard_name' => 'Guard név',
    'field.permissions' => 'Engedélyek',
    'field.select_all.name' => 'Összes kijelölése',
    'field.select_all.message' => 'Engedélyezze az összes jelenleg <span class="text-primary font-medium">bekapcsolt</span> engedélyt a szerepkör számára.',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Rendszer',
    'nav.role.label' => 'Jogosultságok',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Jogosultság',
    'resource.label.roles' => 'Jogosultságok',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'Entitások',
    'resources' => 'Erőforrások',
    'widgets' => 'Widgetek',
    'pages' => 'Oldalak',
    'custom' => 'Egyedi jogosultságok',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'Nincs megfelelő hozzáférésed',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'Megtekintés',
        'view_any' => 'Összes megtekintése',
        'create' => 'Létrehozás',
        'update' => 'Módosítás',
        'delete' => 'Törlés',
        'delete_any' => 'Összes törlése',
        'force_delete' => 'Végleges törlés',
        'force_delete_any' => 'Összes végeles törlése',
        'restore' => 'Helyreállítás',
        'reorder' => 'Sorbarendezés',
        'restore_any' => 'Összes helyreállítása',
        'replicate' => 'Másolás',
    ],
];
