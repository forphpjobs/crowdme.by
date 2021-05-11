<?php
include_once "views/layout/adminheader.php";


if (isset($_POST['submit'])){
    include_once "models/admin.php";
    //var_dump($_POST['id']);
    $number_news=$_POST['id'];
    $resultDelete=admin::DeleteNews($number_news);
   if($resultDelete===true){
        header('location: /admin/news/delete');
    }
}


?>

    <form action="" method="post">
        <?php foreach ($result as $news):?>
           <table>
               <tr>
                   <td><p> <?php echo $news['name']?></p></td>
                   <td><input type="checkbox" name="id[]" value="<?php echo $news['id']?>"></td>
               </tr>
               <tr>
                   <td><p> <?php echo $news['opisanie']?><hr></p></td>
               </tr>
           </table>

        <?php endforeach;?>

           <div style="float: right;margin-bottom: 25px"><input type="submit" name="submit" value="удалить"></div>



    </form>



