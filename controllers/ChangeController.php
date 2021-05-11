<?php


class ChangeController
{
    public static function actionIndex(){
        session_start();

        if(isset($_SESSION['logined']) and $_SESSION['logined']===true){

            include_once "views/change/index.php";

        } else{
            header('location: login');

        }

    }
}