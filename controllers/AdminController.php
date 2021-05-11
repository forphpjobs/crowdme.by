<?php


class AdminController
{
    public static function actionIndex(){
        session_start();
        $admin=$_SESSION['admin'];
//echo $admin;
        if($admin>0){
          include_once "views/admin/index.php";

       } else{
            header('location: /');

       }

}
}