<?php
/**
 * 
 * Class model
 * @package block_quiz_reporting
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_quiz_reporting\controllers\result;
use \stdClass;

require_once($CFG->dirroot . '/user/profile/lib.php');
use block_quiz_reporting\controllers\BaseController;
use block_quiz_reporting\patterns\repository\result\ResultRepository;
// Dto Models
use block_quiz_reporting\models\result\ResultDto;

class ResultController extends BaseController implements IResultController {

    private $_resultRp;

    public function __construct() {
        parent::__construct();
        $this->_resultRp = new ResultRepository();
    }
    // Converters
    public function convertToResultDtoArray(array $inputArray):array{
        $tmpArray = [];
        foreach($inputArray as $row){
            $tmp = (object)(array)$row;
            $resultx = $this->_mapper->map($tmp, ResultDto::class);
            array_push($tmpArray, $resultx);
        }
        return $tmpArray;
    }
    public function groupByCategory(array $inputArray):array{
        $responseData=[];
        $tmpString="";
        $index = 0;
        foreach($inputArray as $item){
            if($tmpString != $item->categorie){
                $tmpString = $item->categorie;
                //define object
                $tmpObject =  new stdClass();
                $tmpObject->name = $item->categorie;
                $tmpObject->index = $index;
                $index = $index+1;
                $tmpObject->showBreakLine = true;
                $tmpObject->groups = [];
                
                foreach($inputArray as $itemX){
                    if($tmpString == $itemX->categorie){
                        array_push($tmpObject->groups,$itemX);
                    }
                }
                array_push($responseData,$tmpObject);
            }
        }
        if($index > 0){
            $responseData[$index -1]->showBreakLine = false;
        }
        

        return $responseData;
    }
    // data geters
    public function getMyResultsDto():array{
        $myAccount    = $this->_userService->getSamAccount();
        $sourceData   = $this->_resultRp->getAllResultsBySam($myAccount);
        $responseData = $this->convertToResultDtoArray($sourceData);
        return $responseData;
    }
    // Views
    public function showContentView():string{
        global $OUTPUT;
        $resultData = $this->getMyResultsDto();
        $groupData = $this->groupByCategory($resultData);
        if(is_array($groupData) && !empty($groupData)){
            return $OUTPUT->render_from_template("quiz_reporting/content", ['rootData'=>$groupData]);
        }
        //return json_encode($groupData);
        return $OUTPUT->render_from_template("quiz_reporting/content_no_data", null);
    }
}