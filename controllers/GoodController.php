<?php


class GoodController
{
    public static function actionGoodregister(){
        session_start();
        include_once "views/good/goodregister.php";

    }

}