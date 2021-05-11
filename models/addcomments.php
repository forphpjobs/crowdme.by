<?php
include_once "comments.php";


if(isset($_POST['submit'])){

    if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['text'])){

        $name=strip_tags($_POST['name']);
        $email=strip_tags($_POST['email']);
        $text=strip_tags($_POST['text']);
        $news_id=$item['news_id'];
        comments::addCommentByNewsId($name,$email,$text,$news_id);
    }


}
