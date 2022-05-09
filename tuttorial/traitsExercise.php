<?php
trait lois{

    function getFilesize($filename){
        return filesize($filename);
    }
}

class jazzy{
    use lois;

    function checkSize($filename){
    return $this->getFilesize($filename);
    }
}

$jazzy1 = new jazzy();
echo $jazzy1->checkSize("posts.txt");