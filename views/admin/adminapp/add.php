<?php
include_once "views/layout/adminheader.php";

if(isset($_POST['submit'])){

    $name=strip_tags($_POST['name']);
    $opisanie=strip_tags($_POST['opisanie']);
    $text=strip_tags($_POST['text']);
    $tmp=$_FILES['file']['tmp_name'];
    $path="upload/app_foto/";
        if(move_uploaded_file($_FILES['file']['name'], $path.$_FILES['file']['name'])){
            $img=$path.$_FILES['file']['name'];
        }else{
            $img="upload/app_foto/nofoto.png";
        }

    include_once "models/admin.php";
    $result2=admin::AddApp($name,$text,$opisanie,$img);
    if ($result2===true){
        header('location: /admin/news/add');
    }else{
        echo "Ошибка";
    }


}



?>

<div style="text-align: center">
    <form action="" method="post" enctype="multipart/form-data">

        <p>
            <label for="id1">Название:</label><br><textarea id="id1" name="name" rows="3" cols="40"></textarea>
        </p>
        <p>
            <label for="id2">Описание:</label><br><textarea id="id2" name="opisanie" rows="10" cols="40"></textarea>
        </p>
        <p>
            <label for="id3">Текст:</label><br><textarea id="id3" name="text" rows="10" cols="40"></textarea>
        </p>
        <p>
            <label for="id4">Фото:</label><br><input id="id4" type="file" name="file" >
        </p>
        <input type="submit" name="submit">

    </form>
</div>