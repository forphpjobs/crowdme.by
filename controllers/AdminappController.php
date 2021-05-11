<?php


class AdminappController
{

    public static function actionAdd(){
        session_start();
        $admin=$_SESSION['admin'];

        if($admin>0){

            include_once "views/admin/adminapp/add.php";

        } else{
            header('location: /');
        }

    }

    public static function actionDelete(){
        session_start();
        $admin=$_SESSION['admin'];

        if($admin>0){

            include_once "models/app.php";
            $app=app::getApp();
            //var_dump($app);
           include_once "views/admin/adminapp/delete.php";

        } else{
            header('location: /');
        }

    }

}