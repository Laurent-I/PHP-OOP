<?php 

class Files {
    function getContents($filename) : string{
    if(!file_exists($filename)){
        echo "$filename doesnot exist";                                                                                                            
        
    }
    $content = file_get_contents($filename);
    return $content;
}
function displayContents($filename) {
    if(!file_exists($filename)){
        echo "$filename doesnot exist";
        
    }
echo file_get_contents($filename);
echo "<br>";
    }
}

$file1 = new Files();
$file1->displayContents("text.txt");
echo "Here is your File Content:".$file1->getContents("text.txt"); 