<?php include_once "views/layout/adminheader.php";


if(isset($_POST['submit'])){

    $id=$_POST['id'];
    var_dump($id);
    include_once "models/admin.php";
    $result=admin::DeleteComments($id);

   if($result===true){
        header('location: /admin/comment/delete');
    }
}


?>

<form action="" method="post">
    <?php if(isset($result)  and !empty($result)):?>
        <?php foreach ($result as  $item):?>
            <div class="row">
                <div class="col-sm-6 col-sm-6 col-xs-6">
                    <div class="promotion">
                        <h4> <input type="checkbox" name="id[]" value="<?php echo $item['id']?>"> <?php echo $item['name']?> </h4>

                        <p><?php echo $item['text']?></p>
                        <hr>

                    </div>
                </div>
            </div>
        <?php endforeach;?>
    <?php endif;?>

    <div style="float: left;margin-bottom: 25px"><input type="submit" name="submit" value="удалить"></div>

</form>




