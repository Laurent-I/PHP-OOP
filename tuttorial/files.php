<?php
class Files{
    function displayContents($filename) : bool {
        $result = true;
        try{
            echo "Fetching The content of the: $filename <br>".PHP_EOL;
            $content = file_get_contents($filename);
            echo "Displaying Content of the file:$filename <br>".PHP_EOL;
            echo $content;
        }catch(Exception $e){
            $result = false;
        }
        return $result;
    }
}

$file1 = new Files();
$file1->displayContents("text.txt");

//OOPS brings reusability to your program 
?>