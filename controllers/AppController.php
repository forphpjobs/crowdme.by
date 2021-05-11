<?php

include_once "models/app.php";
class AppController
{

    public function actionIndex(){
        session_start();

        $result=app::getApp();
        //var_dump($result);
       include_once "views/app/index.php";
    }


    public function actionView($item){
        session_start();
        $id=$item[0];
        $result=app::getAppId($id);
        //var_dump($result);

        include_once "views/app/view.php";
    }

}