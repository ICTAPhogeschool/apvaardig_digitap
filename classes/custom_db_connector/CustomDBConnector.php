<?php
/**
 * 
 * Class model
 * @package block_quiz_reporting
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace block_quiz_reporting\custom_db_connector;
require_once($CFG->dirroot . '/user/profile/lib.php');

use mysqli;

class CustomDBConnector extends mysqli {
    public function __construct() {
        parent::init();
        $pluginName='block_quiz_reporting';

        $db_user        = get_config($pluginName, 'databaseUser');
        $db_pwd         = get_config($pluginName, 'databasePass');
        $db_host        = get_config($pluginName, 'databaseHost');
        $db_name        = get_config($pluginName, 'databaseName');
        $db_port        = (int)get_config($pluginName, 'databasePort');
        $db_timeout     = (int)get_config($pluginName, 'databaseTimeout');

        if (!parent::options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
            die('Setting MYSQLI_INIT_COMMAND failed');
        }
        if (!parent::options(MYSQLI_OPT_CONNECT_TIMEOUT, $db_timeout)) {
            die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
        }

        if (!parent::real_connect($db_host, $db_user, $db_pwd, $db_name, $db_port)) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
}