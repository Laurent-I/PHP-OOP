<?php
class section1{
    function hello(){
        echo " This is the section area <br>";
    }

}
class lecture1 extends section1{
    //Overriding the hello nethod from section area
    function hello(){
        echo "This is lecture area <br>";
        //using the scope resolution operator we can  avoid overriding of methods.
        parent::hello();
    }
}

$lecture1 = new lecture1();
$lecture1->hello();
$section1 = new section1();
$section1->hello();
?>