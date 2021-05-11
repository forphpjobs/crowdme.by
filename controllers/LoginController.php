<?php


class LoginController
{

    public static function actionIndex(){
        session_start();
        include_once "views/login/index.php";

    }

}