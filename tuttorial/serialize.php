<?php
class Gaks{

    public $post;
    function __construct($post)
    {
        $this->post = $post;
    }
}
/*
$post1 = new Gaks("Gakuba Edmond");
$serialised = serialize($post1);

echo $serialised;
file_put_contents("posts.txt", $serialised);
*/

$unserialised = file_get_contents("posts.txt");
$post2 = unserialize($unserialised);
echo "<br>";
echo $post2->post;


?>