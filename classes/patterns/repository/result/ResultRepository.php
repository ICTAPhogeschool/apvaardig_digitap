<?php
/**
 * Class model
 * @package block_quiz_reporting
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_quiz_reporting\patterns\repository\result;

use block_quiz_reporting\patterns\repository\BaseRepository;
use block_quiz_reporting\models\result\ResultModel;

class ResultRepository extends BaseRepository implements IResultRepository{
    public function __construct(){
        parent::__construct();
    }
    public function getAllResults():array{
        try{
            $this->start_db();
            $query="SELECT * FROM dashboard_data
                    ORDER BY categorie, sortnr";
            $result = $this->_dbClient-> query($query);
            $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $resultdata = [];
            foreach($rows as $row){
                $tmp = (object)(array)$row;
                $resultx = $this->_mapper->map($tmp, ResultModel::class);
                array_push($resultdata, $resultx);
            }
            $this->stop_db();
            return $resultdata;
        }
        catch(Exception $e){
            print_r($e);
            return [];
        }
    }
    public function getAllResultsBySam(string $samAcount):array{
        try{
            $this->start_db();
            $query="SELECT * FROM dashboard_data
                    WHERE sam ='$samAcount'
                    ORDER BY categorie, sortnr";
            $result = $this->_dbClient-> query($query);
            $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $resultdata = [];
            foreach($rows as $row){
                $tmp = (object)(array)$row;
                $resultx = $this->_mapper->map($tmp, ResultModel::class);
                array_push($resultdata, $resultx);
            }
            $this->stop_db();
            return $resultdata;
        }
        catch(Exception $e){
            print_r($e);
            return [];
        }
        
    }
}