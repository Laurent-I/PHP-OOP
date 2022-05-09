<?php
class Posts {
    public $content;
    function __construct($content)
    {
        //Intialize the Value
        echo "This is a constructor";
        echo "<br>";
        $this->content = $content;
    }
    function __destruct()
    {
        //Closes the connection or empty the space
        echo "This is a destructor";
    }
    function printContent(){
       echo $this->content;
       return $this;
    }
}

$post1 = new Posts("This is content");
$post1->printContent();
echo "<br>";
$content  =$post1->printContent()->content = "Irakarama Laurent";
echo "<br>";
echo $content;
echo "<br>"
?>