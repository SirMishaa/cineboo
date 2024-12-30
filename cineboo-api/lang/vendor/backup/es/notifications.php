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
    'exception_message' => 'Mensaje de la excepción: :message',
    'exception_trace' => 'Traza de la excepción: :trace',
    'exception_message_title' => 'Mensaje de la excepción',
    'exception_trace_title' => 'Traza de la excepción',

    'backup_failed_subject' => 'Copia de seguridad de :application_name fallida',
    'backup_failed_body' => 'Importante: Ocurrió un error al realizar la copia de seguridad de :application_name',

    'backup_successful_subject' => 'Se completó con éxito la copia de seguridad de :application_name',
    'backup_successful_subject_title' => '¡Nueva copia de seguridad creada con éxito!',
    'backup_successful_body' => 'Buenas noticias, una nueva copia de seguridad de :application_name fue creada con éxito en el disco llamado :disk_name.',

    'cleanup_failed_subject' => 'La limpieza de copias de seguridad de :application_name falló.',
    'cleanup_failed_body' => 'Ocurrió un error mientras se realizaba la limpieza de copias de seguridad de :application_name',

    'cleanup_successful_subject' => 'La limpieza de copias de seguridad de :application_name se completó con éxito',
    'cleanup_successful_subject_title' => '!Limpieza de copias de seguridad completada con éxito!',
    'cleanup_successful_body' => 'La limpieza de copias de seguridad de :application_name en el disco llamado :disk_name se completo con éxito.',

    'healthy_backup_found_subject' => 'Las copias de seguridad de :application_name en el disco :disk_name están en buen estado',
    'healthy_backup_found_subject_title' => 'Las copias de seguridad de :application_name están en buen estado',
    'healthy_backup_found_body' => 'Las copias de seguridad de :application_name se consideran en buen estado. ¡Buen trabajo!',

    'unhealthy_backup_found_subject' => 'Importante: Las copias de seguridad de :application_name están en mal estado',
    'unhealthy_backup_found_subject_title' => 'Importante: Las copias de seguridad de :application_name están en mal estado. :problem',
    'unhealthy_backup_found_body' => 'Las copias de seguridad de :application_name en el disco :disk_name están en mal estado.',
    'unhealthy_backup_found_not_reachable' => 'No se puede acceder al destino de la copia de seguridad. :error',
    'unhealthy_backup_found_empty' => 'No existe ninguna copia de seguridad de esta aplicación.',
    'unhealthy_backup_found_old' => 'La última copia de seguriad hecha en :date es demasiado antigua.',
    'unhealthy_backup_found_unknown' => 'Lo siento, no es posible determinar la razón exacta.',
    'unhealthy_backup_found_full' => 'Las copias de seguridad  están ocupando demasiado espacio. El espacio utilizado actualmente es :disk_usage el cual es mayor que el límite permitido de :disk_limit.',

    'no_backups_info' => 'Aún no se hicieron copias de seguridad',
    'application_name' => 'Nombre de la aplicación',
    'backup_name' => 'Nombre de la copia de seguridad',
    'disk' => 'Disco',
    'newest_backup_size' => 'Tamaño de copia de seguridad más reciente',
    'number_of_backups' => 'Número de copias de seguridad',
    'total_storage_used' => 'Almacenamiento total utilizado',
    'newest_backup_date' => 'Fecha de la copia de seguridad más reciente',
    'oldest_backup_date' => 'Fecha de la copia de seguridad más antigua',
];
