<?php
/**
 * 
 * Class model
 * @package block_apvaardig_digiap
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace block_apvaardig_digitap\patterns\repository;
use block_apvaardig_digitap\custom_db_connector\CustomDBConnector;
// Automapper
use block_apvaardig_digitap\automapper_plus\Configuration\AutoMapperConfig;
use block_apvaardig_digitap\automapper_plus\AutoMapper;
use \stdClass;
// DB Models
use block_apvaardig_digitap\models\result\ResultModel;


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