<?php
class Derek{

    public $post;
    function __construct($post)
    {
        $this->post = $post;
    }
}
$derek1 = new Derek("I am Derek!!");
$derek2 = $derek1; //Copy by Reference

echo $derek1->post = "I ain't no Clone 🙍🏿‍♂️🙍🏿‍♂️ <br>";
echo $derek1->post = "Well... I ain't the Clone then bitch 🙍🏿‍♂️🙍🏿‍♂️ <br>";

$derek1 = new Derek("I am Derek!!");
$derek2 = clone $derek1;//Cloning
echo $derek1->post = "I am the Original 🙍🏽‍♂️";
