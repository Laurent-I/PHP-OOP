<?php
//Data Encapsulation Concept or design Pattern is followed
class Post{
    private $post;

    public function setPost($post){
        $this->post = $post;
    }

    public function getPost() : string{
        return $this->post;
    }
}

$post1 = new Post();
$post1->setPost("Irakarama Laurent");
echo $post1->getPost();
?>

