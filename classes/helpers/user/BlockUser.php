<?php
/**
 * 
 * Class model
 * @package block_apvaardig_digiap
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace quiz_reporting_block\helpers\user;

class BlockUser implements IBlockUser {
    public function getSamAccount():?string{
        global $USER;
        $sam = $USER->username;
        if(strpos($sam,"@") !==false){
            $pieces = explode("@",$sam);
            return $pieces[0];
        }
        return null;
    }
}