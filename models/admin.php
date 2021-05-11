<?php
include_once "components/Db.php";

class admin
    {/*
     * Удаляет новости из базы данных.
     */
    public static function DeleteNews(array $number_news){

        $select=implode(',',array_fill(0, count($number_news), '?'));
        $db=Db::connectDb();
        $query=$db->prepare("DELETE FROM news where id IN( $select)");
        $query->execute($number_news);
    }

    /*
     * Добавляет новую новость в базу данных.
     * Возвращает true при успешном добавлении записи в БД.
     */
    public static function AddNews(string $name,string $opisanie,string $text){

        $db=Db::connectDb();
        $query=$db->prepare("INSERT INTO news  (name, opisanie, text) VALUES(:name, :opisanie, :text)" );
        $query->bindParam(':name', $name,PDO::PARAM_STR);
        $query->bindParam(':opisanie', $opisanie,PDO::PARAM_STR);
        $query->bindParam(':text', $text,PDO::PARAM_STR);
        $result=$query->execute();
        return $result;

    }
    /*
     * Удаляет приложение из базы данных.
     */
    public static function DeleteApp(array $number_app){

        $select=implode(',',array_fill(0,count($number_app),'?'));
        $db=Db::connectDb();
        $query=$db->prepare("DELETE from apps where id IN( $select)");
        $query->execute($number_app);

    }

    /*
     * Добавляет новое приложение в базу данных.
     * Возвращает true при успешном добавлении записи в БД.
     */
    public static function AddApp(string $name, string $text,string $opisanie,string $img):bool{

        $db=Db::connectDb();
        $query=$db->prepare("INSERT INTO apps (name, text, opisanie, img) VALUES (:name, :text, :opisanie, :img)");
        $query->bindParam(':name', $name,PDO::PARAM_STR);
        $query->bindParam(':text', $text, PDO::PARAM_STR);
        $query->bindParam(':opisanie',$opisanie, PDO::PARAM_STR);
        $query->bindParam(':img', $img,PDO::PARAM_STR);
        $result= $query->execute();
        return $result;

    }

    /*
     * Удаляет выбранные комментарии к новостям.
     * Возвращает true в случае успешного удаления из БД.
     */
    public static function DeleteComments(array $id):bool{

        $arr=implode(',',array_fill(0,count($id),'?'));
        $db=Db::connectDb();
        $query=$db->prepare("DELETE FROM comments WHERE id IN ( $arr)");
        $result=$query->execute($id);
        return $result;
    }
    /*
     * Получает и возвращает список всех юзеров.
     */
    public static function GetUsers(){

        $db=Db::connectDb();
        $result=$db->query("SELECT id, name, email, admin FROM users WHERE admin NOT IN (1)")->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }


    public static function AddDeleteModer($moder){

        $db=Db::connectDb();
       // $select=implode(',', array_fill(0,count($id),'?'));
        foreach ($moder as $id=>$item){
            $query=$db->prepare("UPDATE users SET admin = :item where id= :id");
            $query->bindParam(':item', $item, PDO::PARAM_INT);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();

        }


    }
}