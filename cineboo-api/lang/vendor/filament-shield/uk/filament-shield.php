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

    'column.name' => 'Назва',
    'column.guard_name' => 'Назва гварда',
    'column.roles' => 'Ролі',
    'column.permissions' => 'Дозволи',
    'column.updated_at' => 'Оновлено',

    /*
    |------------------------------------------------- -------------------------
    | Form Fields
    |------------------------------------------------- -------------------------
    */

    'field.name' => 'Назва',
    'field.guard_name' => 'Назва гварда',
    'field.permissions' => 'Дозволи',
    'field.select_all.name' => 'Вибрати все',
    'field.select_all.message' => 'Включити всі дозволи, які <span class="text-primary font-medium">Доступні</span> для цієї ролі',

    /*
    |------------------------------------------------- -------------------------
    | Navigation & Resource
    |------------------------------------------------- -------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => 'Ролі',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Роль',
    'resource.label.roles' => 'Ролі',

    /*
    |------------------------------------------------- -------------------------
    | Section & Tabs
    |------------------------------------------------- -------------------------
    */

    'section' => 'Сутності',
    'resources' => 'Ресурси',
    'widgets' => 'Віджети',
    'pages' => 'Сторінки',
    'custom' => 'Користувальницькі дозволи',

    /*
    |------------------------------------------------- -------------------------
    | Messages
    |------------------------------------------------- -------------------------
    */

    'forbidden' => 'У вас немає доступу',

    /*
    |------------------------------------------------- -------------------------
    | Resource Permissions' Labels
    |------------------------------------------------- -------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'Перегляд',
        'view_any' => 'Перегляд будь-якого',
        'create' => 'Створити',
        'update' => 'Оновити',
        'delete' => 'Видалити',
        'delete_any' => 'Видалити будь-яке',
        'force_delete' => 'Примусове видалення',
        'force_delete_any' => 'Примусове видалення будь-якого',
        'restore' => 'Відновити',
        'reorder' => 'Змінити порядок',
        'restore_any' => 'Відновити будь-яке',
        'replicate' => 'Копіювати',
    ],
];
