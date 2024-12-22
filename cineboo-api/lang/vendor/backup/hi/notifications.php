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
    'exception_message' => 'अपवाद संदेश: :message',
    'exception_trace' => 'अपवाद निशान: :trace',
    'exception_message_title' => 'अपवादी संदेश',
    'exception_trace_title' => 'अपवाद निशान',

    'backup_failed_subject' => ':application_name का बैकअप असफल रहा',
    'backup_failed_body' => 'जरूरी सुचना: :application_name का बैकअप लेते समय असफल रहे',

    'backup_successful_subject' => ':application_name का बैकअप सफल रहा',
    'backup_successful_subject_title' => 'बैकअप सफल रहा!',
    'backup_successful_body' => 'खुशखबर, :application_name का बैकअप :disk_name पर संग्रहित करने मे सफल रहे.',

    'cleanup_failed_subject' => ':application_name के बैकअप की सफाई असफल रही.',
    'cleanup_failed_body' => ':application_name के बैकअप की सफाई करते समय कुछ बाधा आयी है.',

    'cleanup_successful_subject' => ':application_name के बैकअप की सफाई सफल रही',
    'cleanup_successful_subject_title' => 'बैकअप की सफाई सफल रही!',
    'cleanup_successful_body' => ':application_name का बैकअप जो :disk_name नाम की डिस्क पर संग्रहित है, उसकी सफाई सफल रही.',

    'healthy_backup_found_subject' => ':disk_name नाम की डिस्क पर संग्रहित :application_name के बैकअप स्वस्थ है',
    'healthy_backup_found_subject_title' => ':application_name के सभी बैकअप स्वस्थ है',
    'healthy_backup_found_body' => 'बहुत बढ़िया! :application_name के सभी बैकअप स्वस्थ है.',

    'unhealthy_backup_found_subject' => 'जरूरी सुचना :  :application_name के बैकअप अस्वस्थ है',
    'unhealthy_backup_found_subject_title' => 'जरूरी सुचना : :application_name के बैकअप :problem के बजेसे अस्वस्थ है',
    'unhealthy_backup_found_body' => ':disk_name नाम की डिस्क पर संग्रहित :application_name के बैकअप अस्वस्थ है',
    'unhealthy_backup_found_not_reachable' => ':error के बजेसे बैकअप की मंजिल तक पोहोच नहीं सकते.',
    'unhealthy_backup_found_empty' => 'इस एप्लीकेशन का कोई भी बैकअप नहीं है.',
    'unhealthy_backup_found_old' => 'हालहीमें :date को लिया हुआ बैकअप बहुत पुराना है.',
    'unhealthy_backup_found_unknown' => 'माफ़ कीजिये, सही कारण निर्धारित नहीं कर सकते.',
    'unhealthy_backup_found_full' => 'सभी बैकअप बहुत ज्यादा जगह का उपयोग कर रहे है. फ़िलहाल सभी बैकअप :disk_usage जगह का उपयोग कर रहे है, जो की :disk_limit अनुमति सीमा से अधिक का है.',

    'no_backups_info' => 'अभी तक कोई बैकअप नहीं बनाया गया था',
    'application_name' => 'आवेदन का नाम',
    'backup_name' => 'बैकअप नाम',
    'disk' => 'डिस्क',
    'newest_backup_size' => 'नवीनतम बैकअप आकार',
    'number_of_backups' => 'बैकअप की संख्या',
    'total_storage_used' => 'उपयोग किया गया कुल संग्रहण',
    'newest_backup_date' => 'नवीनतम बैकअप आकार',
    'oldest_backup_date' => 'सबसे पुराना बैकअप आकार',
];
