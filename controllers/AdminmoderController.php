<?php
include_once "models/admin.php";

class AdminmoderController
{
    public static function actionAdd(){

        session_start();
        $admin=$_SESSION['admin'];
        if($admin==1){



            include_once "views/admin/adminmoder/add.php";


        }elseif($admin==2){
            header('location: /admin');
        }else{
            header('location: /');
        }

    }

    public static function actionDelete(){
        session_start();
        $admin=$_SESSION['admin'];
        if($admin==1){

            $result=admin::GetUsers();
            include_once "views/admin/adminmoder/delete.php";

        }elseif($admin==2){
            header('location: /admin');
        }else{
            header('location: /');
        }


    }


}