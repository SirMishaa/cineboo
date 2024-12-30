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
    'exception_message' => 'Mensagem de exceção: :message',
    'exception_trace' => 'Rasto da exceção: :trace',
    'exception_message_title' => 'Mensagem de exceção',
    'exception_trace_title' => 'Rasto da exceção',

    'backup_failed_subject' => 'Falha no backup da aplicação :application_name',
    'backup_failed_body' => 'Importante: Ocorreu um erro ao executar o backup da aplicação :application_name',

    'backup_successful_subject' => 'Backup realizado com sucesso: :application_name',
    'backup_successful_subject_title' => 'Backup Realizado com Sucesso!',
    'backup_successful_body' => 'Boas notícias, foi criado um novo backup no disco :disk_name referente à aplicação :application_name.',

    'cleanup_failed_subject' => 'Falha na limpeza dos backups da aplicação :application_name.',
    'cleanup_failed_body' => 'Ocorreu um erro ao executar a limpeza dos backups da aplicação :application_name',

    'cleanup_successful_subject' => 'Limpeza dos backups da aplicação :application_name concluída!',
    'cleanup_successful_subject_title' => 'Limpeza dos backups concluída!',
    'cleanup_successful_body' => 'Concluída a limpeza dos backups da aplicação :application_name no disco :disk_name.',

    'healthy_backup_found_subject' => 'Os backups da aplicação :application_name no disco :disk_name estão em dia',
    'healthy_backup_found_subject_title' => 'Os backups da aplicação :application_name estão em dia',
    'healthy_backup_found_body' => 'Os backups da aplicação :application_name estão em dia. Bom trabalho!',

    'unhealthy_backup_found_subject' => 'Importante: Os backups da aplicação :application_name não estão em dia',
    'unhealthy_backup_found_subject_title' => 'Importante: Os backups da aplicação :application_name não estão em dia. :problem',
    'unhealthy_backup_found_body' => 'Os backups da aplicação :application_name no disco :disk_name não estão em dia.',
    'unhealthy_backup_found_not_reachable' => 'O destino dos backups não pode ser alcançado. :error',
    'unhealthy_backup_found_empty' => 'Não existem backups para essa aplicação.',
    'unhealthy_backup_found_old' => 'O último backup realizado em :date é demasiado antigo.',
    'unhealthy_backup_found_unknown' => 'Desculpe, impossível determinar a razão exata.',
    'unhealthy_backup_found_full' => 'Os backups estão a utilizar demasiado espaço de armazenamento. A utilização atual é de :disk_usage, o que é maior que o limite permitido de :disk_limit.',

    'no_backups_info' => 'Nenhum backup foi feito ainda',
    'application_name' => 'Nome da Aplicação',
    'backup_name' => 'Nome de backup',
    'disk' => 'Disco',
    'newest_backup_size' => 'Tamanho de backup mais recente',
    'number_of_backups' => 'Número de backups',
    'total_storage_used' => 'Armazenamento total usado',
    'newest_backup_date' => 'Data de backup mais recente',
    'oldest_backup_date' => 'Data de backup mais antiga',
];
