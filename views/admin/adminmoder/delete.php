<?php include_once "views/layout/adminheader.php";

if(isset($_POST['submit'])){
    array_pop($_POST);
    $key=array_keys($_POST);
    $arr=null;

    for($i=0; $i<count($key);$i++){
        $arr.=$key[$i];

    }

    $id=explode('admin/', $arr);
    array_shift($id);
    $values=array_values($_POST);
    $moder=array_combine($id,$values);

    admin::AddDeleteModer($moder);
   // header('location: /admin/moder/delete');

}


?>

<form action="" method="post">
    <?php if(isset($result)  and !empty($result)):?>
        <?php foreach ($result as  $item):?>
            <div class="row">
                <div class="col-sm-6 col-sm-6 col-xs-6">
                    <div class="promotion">



                        <br><input type="text" name="name" value="<?php echo $item['name']?>" disabled ><br>
                        <br><input type="text" name="email" value="<?php echo $item['email']?>" disabled>
                        <p>
                            <input id="id<?php echo $item['id']?>" type="radio" name="admin/<?php echo $item['id']?>" value="0"
                                   <?php
                                   if($item['admin']==0){
                                       echo "checked";
                                   }
                                   ?>
                                   required>
                            <label for="<?php echo $item['id']?>">Пользователь</label><br>

                            <input id="id<?php echo $item['id']?>" type="radio" name="admin/<?php echo $item['id']?>" value="2"
                                    <?php
                                    if($item['admin']==2){
                                        echo "checked";
                                    }
                                    ?> required>
                            <label for="<?php echo $item['id']?>">Модератор</label><br>
                           <!--
                           <input id="id<?php echo $item['id']?>" type="radio" name="admin/<?php echo $item['id']?>"
                                <?php
                                if($item['admin']==1){
                                    echo "checked ";
                                }
                                ?> disabled>
                            <label for="<?php echo $item['id']?>">Администратор</label><br>
                            -->
                        </p>
                       <hr>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    <?php endif;?>

    <div style="float: left;margin-bottom: 25px"><input type="submit" name="submit" value="отправить"></div>

</form>