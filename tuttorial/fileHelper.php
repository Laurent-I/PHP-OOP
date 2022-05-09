<?php

class fileHelper{
    static function hasData($filename) :bool{
        if(!file_exists($filename)){
            echo "$filename doesn't exist <br>". PHP_EOL;
            return false;
        }
        $content  = file_get_contents($filename);

        if(empty($content)){
            return false;
        }else{
            return true;
        }
    }
}

if(fileHelper::hasData("text.txt")){
    echo "Data Found";
}else{
    echo "Data NOT Found";
}

?>