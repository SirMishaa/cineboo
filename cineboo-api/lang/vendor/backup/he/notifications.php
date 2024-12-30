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
    'exception_message' => 'הודעת חריגה: :message',
    'exception_trace' => 'מעקב חריגה: :trace',
    'exception_message_title' => 'הודעת חריגה',
    'exception_trace_title' => 'מעקב חריגה',

    'backup_failed_subject' => 'כשל בגיבוי של :application_name',
    'backup_failed_body' => 'חשוב: אירעה שגיאה במהלך גיבוי היישום :application_name',

    'backup_successful_subject' => 'גיבוי חדש מוצלח של :application_name',
    'backup_successful_subject_title' => 'גיבוי חדש מוצלח!',
    'backup_successful_body' => 'חדשות טובות, גיבוי חדש של :application_name נוצר בהצלחה על הדיסק בשם :disk_name.',

    'cleanup_failed_subject' => 'נכשל בניקוי הגיבויים של :application_name',
    'cleanup_failed_body' => 'אירעה שגיאה במהלך ניקוי הגיבויים של :application_name',

    'cleanup_successful_subject' => 'ניקוי הגיבויים של :application_name בוצע בהצלחה',
    'cleanup_successful_subject_title' => 'ניקוי הגיבויים בוצע בהצלחה!',
    'cleanup_successful_body' => 'ניקוי הגיבויים של :application_name על הדיסק בשם :disk_name בוצע בהצלחה.',

    'healthy_backup_found_subject' => 'הגיבויים של :application_name על הדיסק :disk_name תקינים',
    'healthy_backup_found_subject_title' => 'הגיבויים של :application_name תקינים',
    'healthy_backup_found_body' => 'הגיבויים של :application_name נחשבים לתקינים. עבודה טובה!',

    'unhealthy_backup_found_subject' => 'חשוב: הגיבויים של :application_name אינם תקינים',
    'unhealthy_backup_found_subject_title' => 'חשוב: הגיבויים של :application_name אינם תקינים. :problem',
    'unhealthy_backup_found_body' => 'הגיבויים של :application_name על הדיסק :disk_name אינם תקינים.',
    'unhealthy_backup_found_not_reachable' => 'לא ניתן להגיע ליעד הגיבוי. :error',
    'unhealthy_backup_found_empty' => 'אין גיבויים של היישום הזה בכלל.',
    'unhealthy_backup_found_old' => 'הגיבוי האחרון שנעשה בתאריך :date נחשב כישן מדי.',
    'unhealthy_backup_found_unknown' => 'מצטערים, לא ניתן לקבוע סיבה מדויקת.',
    'unhealthy_backup_found_full' => 'הגיבויים משתמשים בשטח אחסון רב מידי. שימוש הנוכחי הוא :disk_usage, שגבול המותר הוא :disk_limit.',

    'no_backups_info' => 'לא נעשו עדיין גיבויים',
    'application_name' => 'שם היישום',
    'backup_name' => 'שם הגיבוי',
    'disk' => 'דיסק',
    'newest_backup_size' => 'גודל הגיבוי החדש ביותר',
    'number_of_backups' => 'מספר הגיבויים',
    'total_storage_used' => 'סך האחסון המופעל',
    'newest_backup_date' => 'תאריך הגיבוי החדש ביותר',
    'oldest_backup_date' => 'תאריך הגיבוי הישן ביותר',
];
