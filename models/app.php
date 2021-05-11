<?php
include_once "components/Db.php";

class app
{
    public static function getApp(){

        $db=Db::connectDb();
        $result=$db->query("select * from apps")->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public static function getAppId($id1){


        $db=Db::connectDb();
        $query=$db->prepare("select * from apps where id = :id");
        $query->bindParam(':id', $id1);
        $query->execute();
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

}