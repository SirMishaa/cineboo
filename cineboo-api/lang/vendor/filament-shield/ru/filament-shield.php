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

    'column.name' => 'Имя',
    'column.guard_name' => 'Имя гварда',
    'column.roles' => 'Роли',
    'column.permissions' => 'Разрешения',
    'column.updated_at' => 'Обновлено',

    /*
    |------------------------------------------------- -------------------------
    | Form Fields
    |------------------------------------------------- -------------------------
    */

    'field.name' => 'Имя',
    'field.guard_name' => 'Имя гварда',
    'field.permissions' => 'Разрешения',
    'field.select_all.name' => 'Выбрать все',
    'field.select_all.message' => 'Включить все разрешения, которые <span class="text-primary font-medium">Доступны</span> для этой роли',

    /*
    |------------------------------------------------- -------------------------
    | Navigation & Resource
    |------------------------------------------------- -------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => 'Роли',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Роль',
    'resource.label.roles' => 'Роли',

    /*
    |------------------------------------------------- -------------------------
    | Section & Tabs
    |------------------------------------------------- -------------------------
    */

    'section' => 'Сути',
    'resources' => 'Ресурсы',
    'widgets' => 'Виджеты',
    'pages' => 'Страницы',
    'custom' => 'Пользовательские разрешения',

    /*
    |------------------------------------------------- -------------------------
    | Messages
    |------------------------------------------------- -------------------------
    */

    'forbidden' => 'У вас нет доступа',

    /*
    |------------------------------------------------- -------------------------
    | Resource Permissions' Labels
    |------------------------------------------------- -------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'Просмотр',
        'view_any' => 'Может смотреть любое',
        'create' => 'Создание',
        'update' => 'Обновление',
        'delete' => 'Удаление',
        'delete_any' => 'Может удалить любой',
        'force_delete' => 'Принудительно удалить',
        'force_delete_any' => 'Может принудительно удалить любой',
        'restore' => 'Восстановление',
        'reorder' => 'Изменение порядка',
        'restore_any' => 'Может восстановить любой',
        'replicate' => 'Копировать',
    ],
];
