<?php
/**
 * Class model
 * @package block_apvaardig_digiap
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_apvaardig_digitap\patterns\repository\result;

interface IResultRepository {
    public function getAllResultsBySam(string $samAcount):array;
    public function getAllResults():array;
}