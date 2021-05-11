<?php


class ContactController
{
    public function actionIndex(){
        session_start();
        include "views/contact/index.php";


    }


}