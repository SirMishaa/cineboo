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

    'column.name' => '角色名',
    'column.guard_name' => '守衛',
    'column.roles' => '角色',
    'column.permissions' => '權限',
    'column.updated_at' => '更新時間',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => '角色名',
    'field.guard_name' => '守衛',
    'field.permissions' => '權限',
    'field.select_all.name' => '全選',
    'field.select_all.message' => '啟用當前為該角色 <span class="text-primary font-medium">啟用的</span> 所有權限',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => '角色',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => '角色',
    'resource.label.roles' => '角色',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => '實體',
    'resources' => '資源',
    'widgets' => '小工具',
    'pages' => '頁面',
    'custom' => '自訂',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => '無權訪問',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => '檢視',
        'view_any' => '列表',
        'create' => '建立',
        'update' => '編輯',
        'delete' => '刪除',
        'delete_any' => '批量刪除',
        'force_delete' => '永久刪除',
        'force_delete_any' => '批量永久刪除',
        'restore' => '還原',
        'reorder' => '重新排序',
        'restore_any' => '批量還原',
        'replicate' => '複製',
    ],
];
