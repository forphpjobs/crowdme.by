<?php
include_once "components/Db.php";

class change
{
        public static function changeDate($name, $pass, $gender,$foto,$id){
            $db=Db::connectDb();
            $query=$db->prepare("UPDATE users SET name = :name, password = :pass, gender = :gender, foto = :foto where id=:id");
            $query->bindParam(':name', $name, PDO::PARAM_STR);
            $query->bindParam(':pass', $pass, PDO::PARAM_STR);
            $query->bindParam(':gender', $gender, PDO::PARAM_INT);
            $query->bindParam(':foto', $foto, PDO::PARAM_STR);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $result=$query->execute();
            return $result;
        }
}