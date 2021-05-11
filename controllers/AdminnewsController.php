<?php


class AdminnewsController
{
         public static function actionAdd(){
             session_start();
             $admin=$_SESSION['admin'];

             if($admin>0){


                 include_once "views/admin/adminnews/add.php";

             } else{
                 header('location: /');

             }

         }


         public static function actionDelete(){
             session_start();
             $admin=$_SESSION['admin'];

             if($admin>0){

                 include_once "models/news.php";

                 $result=news::getNews();
                 include_once "views/admin/adminnews/delete.php";

             } else{
                 header('location: /');

             }


         }
}