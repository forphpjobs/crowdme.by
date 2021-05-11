<?php
include_once "models/comments.php";


if(isset($_POST['submit'])){

    if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['text'])){

        $name=strip_tags($_POST['name']);
        $email=strip_tags($_POST['email']);
        $text=strip_tags($_POST['text']);
        $news_id=strip_tags($result['id']);

        comments::addCommentByNewsId($name,$email,$text,$news_id);

        //$url=$_SERVER['REQUEST_URI'];
        //header('location: $url');
    }


}
?>

<div>
    <form action="" method="post">
        <div class="form-group">
            <label for="id1">Имя:</label>
            <input type="text" name="name" class="form-control" id="id1" >
        </div>
        <div class="form-group">
            <label for="id2">E-mail:</label>
            <input type="email" name="email" class="form-control" id="id2 ">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Ваш комментарий:</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
    </form>

</div>



