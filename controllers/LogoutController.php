<?php


class LogoutController
{
    public static function actionIndex(){

        session_start();
        session_unset();
        session_destroy();
        //unset($_SESSION['id']);
       // unset($_SESSION['name']);
       // unset($_SESSION['admin']);
       // unset($_SESSION['logined']);
        header('location: /');

    }

}