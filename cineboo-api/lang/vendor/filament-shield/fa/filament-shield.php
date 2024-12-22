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

    'column.name' => 'نام',
    'column.guard_name' => 'نام گارد',
    'column.roles' => 'نقش‌ها',
    'column.permissions' => 'دسترسی‌ها',
    'column.updated_at' => 'به‌روزشده در',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'نام',
    'field.guard_name' => 'نام گارد',
    'field.permissions' => 'دسترسی‌ها',
    'field.select_all.name' => 'انتخاب همه',
    'field.select_all.message' => 'تمام دسترسی‌های <span class="text-primary font-medium">فعال</span> فعلی را برای این نقش فعال کن.',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => 'نقش‌ها',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'نقش',
    'resource.label.roles' => 'نقش‌ها',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'موجودیت‌ها',
    'resources' => 'منابع',
    'widgets' => 'ویجت‌ها',
    'pages' => 'صفحات',
    'custom' => 'دسترسی‌های سفارشی',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'شما اجازه دسترسی ندارید.',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'نمایش',
        'view_any' => 'نمایش همه',
        'create' => 'ایجاد',
        'update' => 'ویرایش',
        'delete' => 'حذف',
        'delete_any' => 'حذف همه',
        'force_delete' => 'حذف اجباری',
        'force_delete_any' => 'حذف اجباری همه',
        'restore' => 'بازیابی',
        'replicate' => 'تکثیر',
        'reorder' => 'مرتب‌سازی',
        'restore_any' => 'بازیابی همه',
    ],
];
