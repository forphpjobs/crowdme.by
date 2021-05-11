<?php
include_once "models/comments.php";

class AdmincommentController
{
    public static function actionAdd(){
        session_start();
        $admin=$_SESSION['admin'];

        if($admin>0){


            include_once "views/admin/admincomment/add.php";

        } else{
            header('location: /');
        }

    }

    public static function actionDelete(){
        session_start();
        $admin=$_SESSION['admin'];

        if($admin>0){
            $result=comments::getAllComments();
            include_once "views/admin/admincomment/delete.php";

        } else{
            header('location: /');
        }

    }
}