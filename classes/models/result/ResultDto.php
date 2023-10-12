<?php
/**
 * 
 * Class model
 * @package block_quiz_reporting
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_quiz_reporting\models\result;

class ResultDto {
    //public ?string $sam;
    public ?string $categorie;
    public ?string $onderwerp;
    public ?string $resultaat;
    public int $punten_max;
    public bool $resultIsNumber = false;
}