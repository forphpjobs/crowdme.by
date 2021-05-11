<?php


class Db
{
        public static function connectDb(){

            //$db=new PDO('localhost','root','','magazineby');


            $host='localhost';
            $base='magazineby';//имя базы данных на сервере
            $user='root';
            $pass='';

            $db=new PDO("mysql:host=$host;dbname=$base", $user,$pass); //создаём подключение
            $db->query("SET NAMES 'utf8'");//устанавливаем кодировку




            return $db;
        }
}