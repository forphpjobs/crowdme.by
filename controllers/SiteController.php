<?php


class SiteController
{ /*
  // Сессию лучше всего открывать в каждом методе контроллера. Переделать все.
  */


    public function actionIndex(){
        session_start();
        include_once "views/site/index.php";

    }

}