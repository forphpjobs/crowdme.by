<?php
include_once "components/Db.php";

class comments
{
    /*
     * Получает все комментарии к одной новости и возвращает в виде массива.
     */
    public static function getCommentsByNewsId($id){


        $db=Db::connectDb();
        $query=$db->prepare("select * from comments where news_id= :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $result=$query->fetchAll(PDO::FETCH_ASSOC);

    }
    /*
     * Добавляет новый комментарий к новости.
     */
    public static function addCommentByNewsId($name,$email,$text,$news_id){

        $db=Db::connectDb();
        $query=$db->prepare("insert INTO comments (name, email, text, news_id) values (:name, :email, :text, :news_id)");
        $query->bindParam(':name',$name);
        $query->bindParam(':email',$email);
        $query->bindParam(':text',$text);
        $query->bindParam(':news_id',$news_id);
        $query->execute();

        unset($_POST['name']);
        unset($_POST['email']);
        unset($_POST['text']);


    }
    /*
     * Получает все комментарии ко всем новостям и возвращает в виде массива.
     * Запрос отсортирован по возрастанию.
     */
    public static function getAllComments():array{
        $db=Db::connectDb();
        $result=$db->query("SELECT * FROM comments ORDER BY news_id ASC ")->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
}