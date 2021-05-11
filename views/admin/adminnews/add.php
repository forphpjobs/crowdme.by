<?php
include_once "views/layout/adminheader.php";

    if(isset($_POST['submit'])){

        $name=strip_tags($_POST['name']);
        $opisanie=strip_tags($_POST['opisanie']);
        $text=strip_tags($_POST['text']);
        include_once "models/admin.php";
        $result2=admin::AddNews($name,$opisanie,$text);
        if ($result2===true){
            header('location: /admin/news/add');
        }else{
            echo "Ошибка";
        }


    }



?>

<div style="text-align: center">
<form action="" method="post" >

    <p>
        <label for="id1">Название:</label><br><textarea id="id1" name="name" rows="3" cols="40"></textarea>
    </p>
    <p>
        <label for="id2">Описание:</label><br><textarea id="id2" name="opisanie" rows="10" cols="40"></textarea>
    </p>
    <p>
        <label for="id3">Текст:</label><br><textarea id="id3" name="text" rows="10" cols="40"></textarea>
    </p>
    <input type="submit" name="submit">

</form>
</div>