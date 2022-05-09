<?php
class Mutesa{
    public $post;
    public $hasPosts = true;


    function __construct($post)
    {
        $this->post = $post;
    }

    function copyObject(Mutesa $post1, Mutesa $post2){
        $post2->post = $post1->post;
        $post2->hasPosts = $post1->hasPosts;
    }
}

$Mutesa1 = new Mutesa("This is the Original Mutesa");
$Mutesa2 = new Mutesa("This is the Clone Mutesa");

$Mutesa1->copyObject($Mutesa1, $Mutesa2);
echo $Mutesa2->post;

?>
