<?php
/**
 * 
 * Class model
 * @package block_quiz_reporting
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_quiz_reporting\helpers\user;

interface IBlockUser {
    public function getSamAccount():?string;
}