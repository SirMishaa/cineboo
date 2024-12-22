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
    'exception_message' => 'Cu excepția mesajului: :message',
    'exception_trace' => 'Urmă excepţie: :trace',
    'exception_message_title' => 'Mesaj de excepție',
    'exception_trace_title' => 'Urmă excepţie',

    'backup_failed_subject' => 'Nu s-a putut face copie de rezervă pentru :application_name',
    'backup_failed_body' => 'Important: A apărut o eroare în timpul generării copiei de rezervă pentru :application_name',

    'backup_successful_subject' => 'Copie de rezervă efectuată cu succes pentru :application_name',
    'backup_successful_subject_title' => 'O nouă copie de rezervă a fost efectuată cu succes!',
    'backup_successful_body' => 'Vești bune, o nouă copie de rezervă pentru :application_name a fost creată cu succes pe discul cu numele :disk_name.',

    'cleanup_failed_subject' => 'Curățarea copiilor de rezervă pentru :application_name nu a reușit.',
    'cleanup_failed_body' => 'A apărut o eroare în timpul curățirii copiilor de rezervă pentru :application_name',

    'cleanup_successful_subject' => 'Curățarea copiilor de rezervă pentru :application_name a fost făcută cu succes',
    'cleanup_successful_subject_title' => 'Curățarea copiilor de rezervă a fost făcută cu succes!',
    'cleanup_successful_body' => 'Curățarea copiilor de rezervă pentru :application_name de pe discul cu numele :disk_name a fost făcută cu succes.',

    'healthy_backup_found_subject' => 'Copiile de rezervă pentru :application_name de pe discul :disk_name sunt în regulă',
    'healthy_backup_found_subject_title' => 'Copiile de rezervă pentru :application_name sunt în regulă',
    'healthy_backup_found_body' => 'Copiile de rezervă pentru :application_name sunt considerate în regulă. Bună treabă!',

    'unhealthy_backup_found_subject' => 'Important: Copiile de rezervă pentru :application_name nu sunt în regulă',
    'unhealthy_backup_found_subject_title' => 'Important: Copiile de rezervă pentru :application_name nu sunt în regulă. :problem',
    'unhealthy_backup_found_body' => 'Copiile de rezervă pentru :application_name de pe discul :disk_name nu sunt în regulă.',
    'unhealthy_backup_found_not_reachable' => 'Nu se poate ajunge la destinația copiilor de rezervă. :error',
    'unhealthy_backup_found_empty' => 'Nu există copii de rezervă ale acestei aplicații.',
    'unhealthy_backup_found_old' => 'Cea mai recentă copie de rezervă făcută la :date este considerată prea veche.',
    'unhealthy_backup_found_unknown' => 'Ne pare rău, un motiv exact nu poate fi determinat.',
    'unhealthy_backup_found_full' => 'Copiile de rezervă folosesc prea mult spațiu de stocare. Utilizarea curentă este de :disk_usage care este mai mare decât limita permisă de :disk_limit.',

    'no_backups_info' => 'Nu s-au făcut încă copii de rezervă',
    'application_name' => 'Numele aplicatiei',
    'backup_name' => 'Numele de rezervă',
    'disk' => 'Disc',
    'newest_backup_size' => 'Cea mai nouă dimensiune de rezervă',
    'number_of_backups' => 'Număr de copii de rezervă',
    'total_storage_used' => 'Spațiu total de stocare utilizat',
    'newest_backup_date' => 'Cea mai nouă dimensiune de rezervă',
    'oldest_backup_date' => 'Cea mai veche dimensiune de rezervă',
];
