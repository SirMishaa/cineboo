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

    'column.name' => 'Număr',
    'column.guard_name' => 'Numele paznicului',
    'column.roles' => 'Roluri',
    'column.permissions' => 'Permisiuni',
    'column.updated_at' => 'Actualizat la',

    /*
    |------------------------------------------------- -------------------------
    | Form Fields
    |------------------------------------------------- -------------------------
    */

    'field.name' => 'Nume',
    'field.guard_name' => 'Numele paznicului',
    'field.permissions' => 'Permisiuni',
    'field.select_all.name' => 'Selectați tot',
    'field.select_all.message' => 'Activați toate permisiunile în prezent <span class="text-primary font-medium">Activate</span> pentru acest rol',

    /*
    |------------------------------------------------- -------------------------
    | Navigation & Resources
    |------------------------------------------------- -------------------------
    */

    'nav.group' => 'Scut',
    'nav.role.label' => 'Roluri',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Rol',
    'resource.label.roles' => 'Roluri',

    /*
    |------------------------------------------------- -------------------------
    | Section & Tabs
    |------------------------------------------------- -------------------------
    */

    'section' => 'Entități',
    'resources' => 'Resurse',
    'widgets' => 'Widget-uri',
    'pages' => 'Pagini',
    'custom' => 'Permisiuni personalizate',

    /*
    |------------------------------------------------- -------------------------
    | Posts
    |------------------------------------------------- -------------------------
    */

    'forbidden' => 'Nu aveți permisiunea de a accesa',

    /*
    |------------------------------------------------- -------------------------
    | Resource Permissions' Labels
    |------------------------------------------------- -------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'Vizualizare',
        'view_any' => 'Vedeți orice',
        'create' => 'Creează',
        'update' => 'Actualizare',
        'delete' => 'Șterge',
        'delete_any' => 'Șterge orice',
        'force_delete' => 'Forțat ștergerea',
        'force_delete_any' => 'Forțat ștergerea oricărei',
        'restore' => 'Restaurare',
        'reorder' => 'Reordonare',
        'restore_any' => 'Restaurează orice',
        'replicate' => 'Replicare',
    ],
];
