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

    'column.name' => 'العنوان',
    'column.guard_name' => 'اسم الحارس',
    'column.roles' => 'الأدوار',
    'column.permissions' => 'الصلاحيات',
    'column.updated_at' => 'تاريخ التحديث',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'العنوان',
    'field.guard_name' => 'اسم الحارس',
    'field.permissions' => 'الصلاحيات',
    'field.select_all.name' => 'تحديد الكل',
    'field.select_all.message' => 'تفعيل كافة الصلاحيات لهذا الدور',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'إدارة الوصول',
    'nav.role.label' => 'الأدوار',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'دور',
    'resource.label.roles' => 'الأدوار',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'الأقسام',
    'resources' => 'المصادر',
    'widgets' => 'الأجزاء',
    'pages' => 'الصفحات',
    'custom' => 'صلاحيات مخصصة',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'أنت غير مخول، لديك صلاحية للوصول',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'عرض',
        'view_any' => 'عرض الكل',
        'create' => 'إضافة',
        'update' => 'تعديل',
        'delete' => 'حذف',
        'delete_any' => 'حذف الكل',
        'force_delete' => 'إجبار الحذف',
        'force_delete_any' => ' إجبار حذف أي',
        'reorder' => 'إعادة ترتيب',
        'restore' => 'استرجاع',
        'restore_any' => 'استرجاع الكل',
        'replicate' => 'استنساخ',
    ],
];
