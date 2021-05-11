<?php
include_once "components/Db.php";

class news
{

    public static function getNews(){

        $db=Db::connectDb();
       return $result=$db->query("select * from news limit 5")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function addNews($offset){

        $db=Db::connectDb();
        $query=$db->prepare("select * from news limit 5 offset :offset ");
        $query->bindParam(':offset',$offset, PDO::PARAM_INT);
        $query->execute();
        return $result=$query->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function getNewsById($id){

        $db=Db::connectDb();
        $query=$db->prepare("select * from news where id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $result=$query->fetch(PDO::FETCH_ASSOC);

    }

}