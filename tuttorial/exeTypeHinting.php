<?php

declare(strict_types = 1);


class Tweets{
    // private $tweet;
    // private $comment;
    public $tweet;

    function getTweet() : string{
        return $this->tweet;
    }
    function setTweet( string $tweet) : void{
        $this->tweet = $tweet;
    }

    function savePost() :bool{
        $flag = false;
        echo "Saving Posts in Database",
        $flag = true;
        return $flag;
    }

    function fetchPosts(int $id) : array{
        $posts = [];
        echo "Retrieve all the Posts";
        $posts = [1, "Still Waiting for Jujustu Kaisen 0 🥱" ,2, "anyone else 🙋🏽‍♂️ Way to go dawg"];
        return $posts;
    }

}

// $post1 = new Tweets();
// $post1->savePost(",);
// echo $post1->fetchPosts();
?>