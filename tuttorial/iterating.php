<?php
class Pacy{
    public $post;
    public $hasPosts = true;


    function __construct($post)
    {
        $this->post = $post;
    }

    function hello (){
        echo "hello";
    }
}
$post1 = new Pacy("Murangwa Pacifique");

//Iterating objects is like iterating associative arrays we therefore use the foreach keyword 
//Note❗ we iterating over the properties of the class.

foreach($post1 as $key => $value){
    echo "$key => $value <br>";
}

?>