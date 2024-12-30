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

    'column.name' => 'Název',
    'column.guard_name' => 'Název guardu',
    'column.roles' => 'Role',
    'column.permissions' => 'Oprávnění',
    'column.updated_at' => 'Změněno dne',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'Název',
    'field.guard_name' => 'Název guardu',
    'field.permissions' => 'Oprávnění',
    'field.select_all.name' => 'Vybrat vše',
    'field.select_all.message' => 'Povolit všechny oprávnení právě <span class="text-primary font-medium">Dostupné</span> pro tuto roli',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => 'Role',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Role',
    'resource.label.roles' => 'Role',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'Entity',
    'resources' => 'Zdroje',
    'widgets' => 'Widgety',
    'pages' => 'Stránky',
    'custom' => 'Vlastní oprávnění',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'Nemáte oprávnění k přístupu',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'Zobrazit',
        'view_any' => 'Zobrazit jakýkoliv',
        'create' => 'Vyvořit',
        'update' => 'Upravit',
        'delete' => 'Smazat',
        'delete_any' => 'Smazat jakýkoliv',
        'force_delete' => 'Trvale smazat',
        'force_delete_any' => 'Trvale smazat jakýkoliv',
        'restore' => 'Obnovit',
        'reorder' => 'Změnit pořadí',
        'restore_any' => 'Obnovit jakýkoliv',
        'replicate' => 'Duplikovat',
    ],
];
