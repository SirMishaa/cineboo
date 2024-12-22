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
    |------------------------------------------------- -------------------------
    | Table Columns
    |------------------------------------------------- -------------------------
    */

    'column.name' => 'Անվանում',
    'column.guard_name' => 'Գուարդի անվանում',
    'column.roles' => 'Դերեր',
    'column.permissions' => 'Թույլտվություններ',
    'column.updated_at' => 'Թարմացվել է',

    /*
    |------------------------------------------------- -------------------------
    | Form Fields
    |------------------------------------------------- -------------------------
    */

    'field.name' => 'Անվանում',
    'field.guard_name' => 'Գուարդի անվանում',
    'field.permissions' => 'Թույլտվություններ',
    'field.select_all.name' => 'Ընտրել բոլորը',
    'field.select_all.message' => 'Միացնել բոլոր թույլտվությունները, որոնք <span class="text-primary font-medium">Հասանելի</span> են այս դերի համար',

    /*
    |------------------------------------------------- -------------------------
    | Navigation & Resource
    |------------------------------------------------- -------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => 'Դերեր',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Դեր',
    'resource.label.roles' => 'Դերեր',

    /*
    |------------------------------------------------- -------------------------
    | Section & Tabs
    |------------------------------------------------- -------------------------
    */

    'section' => 'Սուբյեկտներ',
    'resources' => 'Ռեսուրսներ',
    'widgets' => 'Վիդջեթներ',
    'pages' => 'Էջեր',
    'custom' => 'Օգտագործողի թույլտվություններ',

    /*
    |------------------------------------------------- -------------------------
    | Messages
    |------------------------------------------------- -------------------------
    */

    'forbidden' => 'Դուք հասանելիություն չունեք',

    /*
    |------------------------------------------------- -------------------------
    | Resource Permissions' Labels
    |------------------------------------------------- -------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'Դիտել',
        'view_any' => 'Դիտել ցանկացած',
        'create' => 'Ստեղծել',
        'update' => 'Թարմացնել',
        'delete' => 'Ջնջել',
        'delete_any' => 'Ջնջել ցանկացած',
        'force_delete' => 'Ստիպել ջնջել',
        'force_delete_any' => 'Ստիպել ջնջել ցանկացածը',
        'restore' => 'Վերականգնել',
        'reorder' => 'Վերադասավորել',
        'restore_any' => 'Վերադասավորել ցանկացածը',
        'replicate' => 'Կրկնօրինակել',
    ],
];
