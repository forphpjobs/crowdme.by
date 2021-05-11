<?php


class Router
{
    protected $route;

    public function __construct(){

       $this->route=require_once 'routes.php';
    }

    public function Run(){
        $route=$this->route;

        $url=trim($_SERVER['REQUEST_URI'],'/');// получаем строку запроса

        foreach ($route as $reg => $path){

            if(preg_match("!$reg!",$url)){

                $url2=preg_replace("~$reg~", $path, $url);

                $path=explode('/',$url2);



                $controller=ucfirst(array_shift($path)).'Controller';
                $action='action'.ucfirst(array_shift($path));

                if(!empty($path)){
                    $params=$path;
                } else{
                    $params=null;
                }

                $file= "controllers/$controller".".php";
                require_once "$file";

                $result= new $controller;
                $result->$action($params);

                break;
            }

        }








    }


}