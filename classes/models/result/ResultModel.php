<?php
/**
 * 
 * Class model
 * @package block_apvaardig_digiap
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace quiz_reporting_block\models\result;

class ResultModel {
    public ?string $uniq;
    public int $insert_timestamp;
    public int $update_timestamp;
    public ?string $sam;
    public ?string $categorie;
    public ?string $onderwerp;
    public ?string $resultaat;
    public int $punten_max;
    public int $sortnr;

}