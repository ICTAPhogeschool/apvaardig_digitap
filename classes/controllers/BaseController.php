<?php
/**
 * 
 * Class model
 * @package block_quiz_reporting
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace block_quiz_reporting\controllers;
// Automapper
use block_quiz_reporting\automapper_plus\Configuration\AutoMapperConfig;
use block_quiz_reporting\automapper_plus\AutoMapper;
use \stdClass;
// DB Models
use block_quiz_reporting\models\result\ResultDto;
// Helpers/service
use block_quiz_reporting\helpers\user\BlockUser;

abstract class BaseController{
    protected $_mapper;
    protected $_userService;
    public function __construct(){
        // Define Service class
        $this->_userService = new BlockUser();
        // define mapping
        $config = new AutoMapperConfig();
        $config->registerMapping(\stdClass::class, ResultDto::class)
                ->forMember('resultIsNumber', function (\stdClass $tmpObject){
                    return is_numeric ($tmpObject->resultaat) ? true : false;
                });
        $this->_mapper = new AutoMapper($config);
    }
}