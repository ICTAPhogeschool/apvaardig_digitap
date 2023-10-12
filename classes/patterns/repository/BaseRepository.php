<?php
/**
 * 
 * Class model
 * @package block_quiz_reporting
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace block_quiz_reporting\patterns\repository;
use block_quiz_reporting\custom_db_connector\CustomDBConnector;
// Automapper
use block_quiz_reporting\automapper_plus\Configuration\AutoMapperConfig;
use block_quiz_reporting\automapper_plus\AutoMapper;
use \stdClass;
// DB Models
use block_quiz_reporting\models\result\ResultModel;


abstract class BaseRepository{
    protected $_dbClient;
    protected $_mapper;

    public function __construct(){
        
        // define mapping
        $config = new AutoMapperConfig();
        $config->registerMapping(\stdClass::class, ResultModel::class);
        $this->_mapper = new AutoMapper($config);
    }
    public function start_db(){
        if(is_null($this->_dbClient)){
            $this->_dbClient = new CustomDBConnector();
            // Check connection
            if ($this->_dbClient -> connect_errno) {
                echo "Failed to connect to MySQL: " . $this->_dbClient -> connect_error;
                exit();
            }
        }
        
    }
    public function stop_db(){
        if(!is_null($this->_dbClient)){
            $this->_dbClient->close();
        }
    }
 }