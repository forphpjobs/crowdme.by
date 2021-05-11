<?php
include_once "models/news.php";

class AjaxController
{
    public static function actionIndex(){

       // echo $_GET['offset'];
        $offset=htmlspecialchars(strip_tags($_GET['offset']), ENT_QUOTES);
        $result=news::addNews($offset);
       // var_dump($result);
        include_once "views/ajax/view.php";
    }
}