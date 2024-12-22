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

    'column.name' => '이름',
    'column.guard_name' => '가드 이름',
    'column.roles' => '역할',
    'column.permissions' => '권한',
    'column.updated_at' => '최근 업데이트',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => '이름',
    'field.guard_name' => '가드 이름',
    'field.permissions' => '권한',
    'field.select_all.name' => '전체 선택',
    'field.select_all.message' => '현재 이 역할에 대해 <span class="text-primary font-medium">활성화</span>된 모든 권한을 활성화',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => '역할',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => '역할',
    'resource.label.roles' => '역할들',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => '섹션',
    'resources' => '리소스',
    'widgets' => '위젯',
    'pages' => '페이지',
    'custom' => '사용자 정의 권한',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => '접근 권한이 없습니다',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => '보기',
        'view_any' => '모두 보기',
        'create' => '생성',
        'update' => '업데이트',
        'delete' => '삭제',
        'delete_any' => '모두 삭제',
        'force_delete' => '강제 삭제',
        'force_delete_any' => '모두 강제 삭제',
        'restore' => '복구',
        'reorder' => '재정렬',
        'restore_any' => '모두 복구',
        'replicate' => '복제',
    ],
];
