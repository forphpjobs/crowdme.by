<?php
include_once "components/Db.php";

class register
{

    public static function addNewUser($name,$password,$email,$data,$gender,$foto){

        $db=Db::connectDb();
        $query=$db->prepare("INSERT INTO users (name, password, email, age, gender,foto) VALUES(:name, :password, :email, :age, :gender, :foto)");
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':password', $password,PDO::PARAM_STR);
        $query->bindParam(':email', $email,PDO::PARAM_STR);
        $query->bindParam(':age', $data,PDO::PARAM_STR);
        $query->bindParam(':gender', $gender,PDO::PARAM_INT);
        $query->bindParam(':foto', $foto,PDO::PARAM_STR);

        $query->execute();

        header("location: /login");

    }

}