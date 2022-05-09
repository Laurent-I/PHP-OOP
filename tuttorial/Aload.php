<?php
//Note for autoloading functions to work the "classname" must be the same as the "filename" ❗❗❗❗❗
spl_autoload_register(function($classname){
    echo "Loading the class: $classname <br>";
    require_once("$classname.php");
});

//Autoloading Files in a namespace with use the below method 👇🏽👇🏽👇🏽 to autoloading the functions
//Namespaces are declared with the keyword : namespace then namespace name .
$dush1 = new library\dush();
$dush1->hello();
echo "<br>";

$emmy1 = new library\emmy();
$emmy1->hello();
echo "<br>";
//Normal AutoLoading Functions
$user1 = new Bank(123456, "Irakarama Laurent");