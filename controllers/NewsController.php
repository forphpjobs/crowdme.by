<?php
include_once "models/news.php";
include_once "models/comments.php";

class NewsController
{
    public static function actionIndex(){
        session_start();
    $result=news::getNews();
   // var_dump($result);
    include_once "views/news/index.php";
    }


    public static function actionView($params){
        session_start();
        $id=$params[0];
        $result=news::getNewsById($id);
       // var_dump($result);

        $result2=comments::getCommentsByNewsId($id);
        //var_dump($result2);

       include_once "views/news/view.php";
    }


}