<?php
//adding dependency using tight Coupling 
class Cours{
    public $cid;
    public $lidObj;

    function __construct($cid ,$lid)
    {
        $this->cid = $cid;
        $this->lidObj  = new less($lid);
    }
}

class less extends Cours{
    public $lid;

    function __construct($lid)
    {
        $this->lid = $lid;
    }
    function showLess(){
        echo "Here are the lessons" . PHP_EOL;
    }
}

$cours  = new Cours(1,122);
$cours->lidObj->showLess();

?>