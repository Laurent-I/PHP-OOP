<?php


class Cours{
    public $cid;

    function __construct($cid )
    {
        $this->cid = $cid;
    }
}

class less extends Cours{
    public $lid;

    function __construct($lid, Cours $c)
    {
        $this->lid = $lid;
        $this->cid = $c->cid;
    }
    function showLess(){
        echo "Here are the lessons" . PHP_EOL;
    }
}
class Quiz{
    public $qid;

    function __construct($qid ,Cours $c)
    {
        $this->qid = $qid;
        $this->cid = $c->cid;
    }
}

$cours  = new Cours(1);
$less  = new Less(100, $cours);
$quiz = new Quiz(200 , $cours);

echo $less->showLess();

?>