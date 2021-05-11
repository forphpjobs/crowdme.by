<?php include_once "views/layout/header.php";
$id=$_SESSION['user']['id'];
$name=$_SESSION['user']['name'];
$email=$_SESSION['user']['email'];
//$admin=$_SESSION['user']['admin'];
$foto=$_SESSION['user']['foto'];
$passUser=$_SESSION['user']['password'];

if (isset($_POST['submit']) and $_POST['submit']==='ok'){

    $name=$_POST['name'];
    $passNew=$_POST['pass'];
    $passOld=$_POST['passOld'];
    $gender=$_POST['gender'];

    if (isset($_FILES['file']) and !empty($_FILES['file'])) {

        $temp = $_FILES['file']['tmp_name'];
        $toFolder = 'upload/users_foto/';
        $nameFile = $_FILES['file']['name'];

        $result = move_uploaded_file($temp, $toFolder . $nameFile);

            if ($result) {
                $foto = $toFolder . $nameFile;
            } else {
                $foto = "upload/users_foto/nofoto.png";
            }

    }else{
        $foto = "upload/users_foto/nofoto.png";
    }

    if(password_verify($passOld, $passUser)){ //проверяем повторно введенный пароль

        include_once "models/change.php";
        $passNew1=password_hash($passNew, PASSWORD_DEFAULT);
        $result=change::changeDate($name, $passNew1, $gender, $foto,$id);

        if ($result===true){
            header('location: logoutandlogin');
        }else{
            $error="Произошла ошибка, попробуйте еще раз.";
            $_SESSION['error']=$error;
        }
    } else{
        $error="Неверный пароль, введите еще раз.";
        $_SESSION['error']=$error;
    }

}





?>
<main class="crowded_contacts">
<section id="promotion-area" class="profile_change">
    <div class="container">
        <!-- Example row of columns -->

        <div class="row">
            <div class="col-sm-12 col-sm-12 col-xs-12">
                <div class="profile_change_card">
                    <div class="profile_change_card_img" >
                        <img class="card-img-top" src="<?php echo $foto;?>" alt="Card image">
                    </div>
                   <?php
                        if (isset( $_SESSION['error']) and !empty( $_SESSION['error'])){
                           //$_SESSION['error'];
                           echo "<h4>".$_SESSION['error']."</h4>";
                      }
                   ?>
                    <form action="" method="post" enctype="multipart/form-data" class="change">
                        <div class="form-group">
                            <label for="exampleInputName">Имя</label>
                            <input type="text" name="name" class="form-control" required id="exampleInputName" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Адрес электронной почты</label>
                            <input type="email" name="email"  disabled placeholder="<?php echo $email?>" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNewPassword">Новый пароль</label>
                            <input type="password"  name="pass" class="form-control" id="exampleInputNewPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputOldPassword">Старый пароль</label>
                            <input type="password"  name="passOld" class="form-control" id="exampleInputOldPassword" required>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="1" id="exampleRadios1" required>
                            <label class="form-check-label" for="exampleRadios1">
                                Мужчина
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="2" id="exampleRadios2" required>
                            <label class="form-check-label" for="exampleRadios2">
                                Женщина
                            </label>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="exampleInputFile">Аватарка</label>
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile" >
                                <label class="custom-file-label" for="customFile">Выбрать файл</label>
                            </div>
                        </div>
                        <button type="submit" name="submit"  value="ok" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
</main>

<?php include_once "views/layout/footer.php"; ?>
