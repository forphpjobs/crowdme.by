<?php
include_once "models/register.php";

class RegisterController
{

    public static function actionIndex(){
        session_start();
        include_once "views/register/index.php";


    }


}