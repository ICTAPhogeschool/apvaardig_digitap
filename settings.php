<?php
// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    // Add header 1
    $settings->add(new admin_setting_heading(
        'Config_Header',
        get_string('global_header1', 'quiz_reporting_block'),
        get_string('global_sub_header1', 'quiz_reporting_block')
    ));
    //setings DB
    $settings->add(new admin_setting_configtext(
        'quiz_reporting_block/databaseHost',
        get_string('global_db_host_txt','quiz_reporting_block'),
        get_string('global_db_host_sub_txt', 'quiz_reporting_block'),
        '127.0.0.1',
        PARAM_RAW
    ));
     $settings->add(new admin_setting_configtext(
        'quiz_reporting_block/databaseName',
        get_string('global_db_name_txt','quiz_reporting_block'),
        get_string('global_db_name_sub_txt', 'quiz_reporting_block'),
        null,
        PARAM_RAW
    ));
    $settings->add(new admin_setting_configtext(
        'quiz_reporting_block/databasePort',
        get_string('global_db_port_txt','quiz_reporting_block'),
        get_string('global_db_port_sub_txt', 'quiz_reporting_block'),
        3306,
        PARAM_INT
    ));
    $settings->add(new admin_setting_configtext(
        'quiz_reporting_block/databaseTimeout',
        get_string('global_db_timeout_txt','quiz_reporting_block'),
        get_string('global_db_timeout_sub_txt', 'quiz_reporting_block'),
        3,
        PARAM_INT
    ));
    // Dabase user settings
    $settings->add(new admin_setting_configtext(
        'quiz_reporting_block/databaseUser',
        get_string('global_db_user_txt','quiz_reporting_block'),
        get_string('global_db_user_sub_txt', 'quiz_reporting_block'),
        null,
        PARAM_RAW
    ));
    $settings->add(new admin_setting_configtext(
        'quiz_reporting_block/databasePass',
        get_string('global_db_pass_txt','quiz_reporting_block'),
        get_string('global_db_pass_sub_txt', 'quiz_reporting_block'),
        null,
        PARAM_RAW
    ));

}


