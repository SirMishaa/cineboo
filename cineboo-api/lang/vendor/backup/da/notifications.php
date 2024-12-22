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
    'exception_message' => 'Fejlbesked: :message',
    'exception_trace' => 'Fejl trace: :trace',
    'exception_message_title' => 'Fejlbesked',
    'exception_trace_title' => 'Fejl trace',

    'backup_failed_subject' => 'Backup af :application_name fejlede',
    'backup_failed_body' => 'Vigtigt: Der skete en fejl under backup af :application_name',

    'backup_successful_subject' => 'Ny backup af :application_name oprettet',
    'backup_successful_subject_title' => 'Ny backup!',
    'backup_successful_body' => 'Gode nyheder - der blev oprettet en ny backup af :application_name på disken :disk_name.',

    'cleanup_failed_subject' => 'Oprydning af backups for :application_name fejlede.',
    'cleanup_failed_body' => 'Der skete en fejl under oprydning af backups for :application_name',

    'cleanup_successful_subject' => 'Oprydning af backups for :application_name gennemført',
    'cleanup_successful_subject_title' => 'Backup oprydning gennemført!',
    'cleanup_successful_body' => 'Oprydningen af backups for :application_name på disken :disk_name er gennemført.',

    'healthy_backup_found_subject' => 'Alle backups for :application_name på disken :disk_name er OK',
    'healthy_backup_found_subject_title' => 'Alle backups for :application_name er OK',
    'healthy_backup_found_body' => 'Alle backups for :application_name er ok. Godt gået!',

    'unhealthy_backup_found_subject' => 'Vigtigt: Backups for :application_name fejlbehæftede',
    'unhealthy_backup_found_subject_title' => 'Vigtigt: Backups for :application_name er fejlbehæftede. :problem',
    'unhealthy_backup_found_body' => 'Backups for :application_name på disken :disk_name er fejlbehæftede.',
    'unhealthy_backup_found_not_reachable' => 'Backup destinationen kunne ikke findes. :error',
    'unhealthy_backup_found_empty' => 'Denne applikation har ingen backups overhovedet.',
    'unhealthy_backup_found_old' => 'Den seneste backup fra :date er for gammel.',
    'unhealthy_backup_found_unknown' => 'Beklager, en præcis årsag kunne ikke findes.',
    'unhealthy_backup_found_full' => 'Backups bruger for meget plads. Nuværende disk forbrug er :disk_usage, hvilket er mere end den tilladte grænse på :disk_limit.',

    'no_backups_info' => 'Der blev ikke foretaget nogen sikkerhedskopier endnu',
    'application_name' => 'Ansøgningens navn',
    'backup_name' => 'Backup navn',
    'disk' => 'Disk',
    'newest_backup_size' => 'Nyeste backup-størrelse',
    'number_of_backups' => 'Antal sikkerhedskopier',
    'total_storage_used' => 'Samlet lagerplads brugt',
    'newest_backup_date' => 'Nyeste backup-størrelse',
    'oldest_backup_date' => 'Ældste backup-størrelse',
];
