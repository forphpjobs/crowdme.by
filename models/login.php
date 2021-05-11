<?php
include_once "components/Db.php";

class login
{

    public static function getPassword($email){

        $db=Db::connectDb();
        $query=$db->prepare("select * from users where email= :email");
        $query->bindParam(':email', $email);
        $query->execute();
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

}