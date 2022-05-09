<?php
class Section{
    public $sectionName;
    public $sectionNum;
    public $sectionLength;
    function __construct($sectionName, $sectionNum, $sectionLength)
    {
        $this->sectionName = $sectionName;
        $this->sectionNum = $sectionNum;
        $this->sectionLength = $sectionLength;

    }
    function printDetails(){
        echo "Section Name is $this->sectionName <br>". PHP_EOL;
        echo "Section Length is $this->sectionLength <br>". PHP_EOL;
        echo "Section Number is $this->sectionNum <br>". PHP_EOL;
    }
}

?>