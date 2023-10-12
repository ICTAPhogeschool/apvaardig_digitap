<?php
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/user/profile/lib.php');
use block_quiz_reporting\controllers\result\ResultController;

class block_quiz_reporting extends block_base {

    public function get_required_javascript() {
    }
    public function init(){
        $this -> title = get_string('titel','quiz_reporting');
    }

    public function get_content() {
      global $CFG, $USER, $DB, $OUTPUT;
        if ($this->content !== null) {
            return $this->content;
        }
        $this->content         =  new stdClass;


        $s1 = new ResultController();
        $this->content->text = $s1->showContentView();

        $this->content->footer ="";
        //$this->content->footer = json_encode($test123->getUserResultsDtoData('p056948'));

        return $this->content;
    }
    function has_config() {
        return true;
    }


}