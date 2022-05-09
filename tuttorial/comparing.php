<?php
class Rex{

    public $post;

    function __construct($post)
    {
        $this->post = $post;
    }
/////Identity Operator - ====
    function compare1(&$obj1, &$obj2){
        if($obj1 === $obj2 ){
            return true;
        }else{
            return false;
        }
    }
/////Comparison Operator - ==
    function compare2(&$obj1, &$obj2){
        if($obj1 == $obj2 ){
            return true;
        }else{
            return false;
        }
    }
}

$post1 =new Rex("Ndizihiwe Regis");
$post2 =new Rex("Ndizihiwe Regis");

echo "----------------------Identity Operator-----------------------";
echo "<br>";
echo $post1->compare1($post1, $post2) ? "SAME" : "DIFFERENT";
echo "<br>";
$post3 = $post1;
echo $post1->compare1($post1, $post3) ? "SAME" : "DIFFERENT";
echo "<br>";
$post4 =clone $post1;
echo $post1->compare1($post1, $post4) ? "SAME" : "DIFFERENT";
echo "<br>";
echo "----------------------Comparison Operator-----------------------";
echo "<br>";

echo $post1->compare2($post1, $post2) ? "SAME" : "DIFFERENT";
echo "<br>";
$post3 = $post1;
echo $post1->compare2($post1, $post3) ? "SAME" : "DIFFERENT";
echo "<br>";
$post4 =clone $post1;
echo $post1->compare2($post1, $post4) ? "SAME" : "DIFFERENT";
echo "<br>";

?>