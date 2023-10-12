<?php
// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    // Add header 1
    $settings->add(new admin_setting_heading(
        'Config_Header',
        get_string('global_header1', 'block_quiz_reporting'),
        get_string('global_sub_header1', 'block_quiz_reporting')
    ));
    //setings DB
    $settings->add(new admin_setting_configtext(
        'block_quiz_reporting/databaseHost',
        get_string('global_db_host_txt','block_quiz_reporting'),
        get_string('global_db_host_sub_txt', 'block_quiz_reporting'),
        '127.0.0.1',
        PARAM_RAW
    ));
     $settings->add(new admin_setting_configtext(
        'block_quiz_reporting/databaseName',
        get_string('global_db_name_txt','block_quiz_reporting'),
        get_string('global_db_name_sub_txt', 'block_quiz_reporting'),
        null,
        PARAM_RAW
    ));
    $settings->add(new admin_setting_configtext(
        'block_quiz_reporting/databasePort',
        get_string('global_db_port_txt','block_quiz_reporting'),
        get_string('global_db_port_sub_txt', 'block_quiz_reporting'),
        3306,
        PARAM_INT
    ));
    $settings->add(new admin_setting_configtext(
        'block_quiz_reporting/databaseTimeout',
        get_string('global_db_timeout_txt','block_quiz_reporting'),
        get_string('global_db_timeout_sub_txt', 'block_quiz_reporting'),
        3,
        PARAM_INT
    ));
    // Dabase user settings
    $settings->add(new admin_setting_configtext(
        'block_quiz_reporting/databaseUser',
        get_string('global_db_user_txt','block_quiz_reporting'),
        get_string('global_db_user_sub_txt', 'block_quiz_reporting'),
        null,
        PARAM_RAW
    ));
    $settings->add(new admin_setting_configtext(
        'block_quiz_reporting/databasePass',
        get_string('global_db_pass_txt','block_quiz_reporting'),
        get_string('global_db_pass_sub_txt', 'block_quiz_reporting'),
        null,
        PARAM_RAW
    ));

}


