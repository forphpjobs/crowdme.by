<?php include_once "views/layout/adminheader.php";


    if(isset($_POST['submit'])){

        $id=$_POST['id'];

        include_once "models/admin.php";
        $result=admin::DeleteApp($id);

        if($result===true){
            header('location: /admin/adminapp/delete');
        }
    }


?>

<form action="" method="post">
    <?php foreach ($app as $item):?>
        <table>
            <tr>

                <td><p> <?php echo $item['name']?></p></td>
                <td><input style="float: right;" type="checkbox" name="id[]" value="<?php echo $item['id']?>"></td>

            </tr>
            <tr>
                <td><p> <?php echo $item['opisanie']?><hr></p></td>
            </tr>
        </table>

    <?php endforeach;?>

    <div style="float: right;margin-bottom: 25px"><input type="submit" name="submit" value="удалить"></div>



</form>



