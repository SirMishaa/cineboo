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

    'column.name' => 'Tên',
    'column.guard_name' => 'Tên guard',
    'column.roles' => 'Vai trò',
    'column.permissions' => 'Quyền',
    'column.updated_at' => 'Cập nhật lúc',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'Tên',
    'field.guard_name' => 'Tên guard',
    'field.permissions' => 'Quyền',
    'field.select_all.name' => 'Chọn tất cả',
    'field.select_all.message' => 'Bật tất cả Quyền hiện tại <span class="text-primary font-medium">Đã bật</span> cho vai trò này',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => 'Vai trò',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Vai trò',
    'resource.label.roles' => 'Vai trò',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'Thực thể',
    'resources' => 'Tài nguyên',
    'widgets' => 'Widget',
    'pages' => 'Trang',
    'custom' => 'Quyền tùy chỉnh',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'Bạn không có quyền để truy cập.',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'Xem',
        'view_any' => 'Xem bất kỳ',
        'create' => 'Tạo',
        'update' => 'Cập nhật',
        'delete' => 'Xóa',
        'delete_any' => 'Xóa bất kỳ',
        'force_delete' => 'Xóa vĩnh viễn',
        'force_delete_any' => 'Xóa vĩnh viễn bất kỳ',
        'restore' => 'Khôi phục',
        'reorder' => 'Sắp xếp lại',
        'restore_any' => 'Khôi phục bất kỳ',
        'replicate' => 'Nhân bản',
    ],
];
