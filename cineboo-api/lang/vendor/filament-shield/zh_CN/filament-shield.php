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
    'column.guard_name' => '守卫',
    'column.roles' => '角色',
    'column.permissions' => '权限',
    'column.updated_at' => '更新时间',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => '角色名',
    'field.guard_name' => '守卫',
    'field.permissions' => '权限',
    'field.select_all.name' => '全选',
    'field.select_all.message' => '启用当前为该角色 <span class="text-primary font-medium">启用的</span> 所有权限',

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

    'section' => '实体',
    'resources' => '资源',
    'widgets' => '小组件',
    'pages' => '页面',
    'custom' => '自定义',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => '无权访问',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => '详情',
        'view_any' => '列表',
        'create' => '创建',
        'update' => '编辑',
        'delete' => '删除',
        'delete_any' => '批量删除',
        'force_delete' => '永久删除',
        'force_delete_any' => '批量永久删除',
        'restore' => '恢复',
        'reorder' => '重新排序',
        'restore_any' => '批量恢复',
        'replicate' => '复制',
    ],
];
