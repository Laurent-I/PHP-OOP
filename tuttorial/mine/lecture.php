<?php

class lecture extends Section{

    public $lectureName;
    public $lectureLength;
    public $lectureNum;

    function __construct($lectureName,$lectureNum,$lectureLength , Section $section)
    {
        $this->lectureName = $lectureName;
        $this->lectureLength = $lectureLength;
        $this->lectureNum = $lectureNum;

        $this->sectionName = $section->sectionName;
        $this->sectionLength = $section->sectionLength;
        $this->sectionNum = $section->sectionNum;

    }
    function printLecture(){
        echo " Lecture name: $this->lectureName <br>". PHP_EOL;
        echo " Lecture Length: $this->lectureLength <br>". PHP_EOL;
        echo " Lecture Number: $this->lectureNum <br>". PHP_EOL;
    }
}


?>