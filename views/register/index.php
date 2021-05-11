<?php
include_once "models/register.php";

if (isset($_POST['submit'])){

    if((!empty($_POST['name']) and !empty($_POST['email'])) and (!empty($_POST['gender']) and !empty($_POST['date'])) and !empty($_POST['pass'])){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $data=$_POST['date'];
        $gender=$_POST['gender'];
        $path="upload/users_foto/";
        $password=password_hash($_POST['pass'], PASSWORD_DEFAULT); // функция кэширует пароль пользователя.

        if(!empty($_FILES['file']['name'])){

            $fileName=$_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], $path.$fileName);
            $foto=$path.$fileName;

        } else{
            $foto="upload/users_foto/nofoto.png";
        }
        register::addNewUser($name,$password,$email,$data,$gender,$foto);


    }

}
?>

<?php
include_once "views/layout/header.php";
?>
<main class="crowded_contacts">
    <section id="promotion-area" class="sections">
        <div class="container">
            <!-- Example row of columns -->

            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12">
                    <div class="promotion">

                        <div class="promotion">

                            <form action="" method="post" enctype="multipart/form-data" class="register">
                                <div class="form-group">
                                    <label for="exampleInputName">Имя</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Адрес электронной почты</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Пароль</label>
                                    <input type="password"  name="pass" class="form-control" id="exampleInputPassword">
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="1" id="exampleRadios1" >
                                    <label class="form-check-label" for="exampleRadios1">
                                        Мужчина
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="2" id="exampleRadios2" >
                                    <label class="form-check-label" for="exampleRadios2">
                                        Женщина
                                    </label>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <label for="exampleInputDate">Дата рождения</label>
                                    <input type="date"  name="date" class="form-control" id="exampleInputDate">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Аватарка</label>
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Выбрать файл</label>
                                    </div>
                                </div>




                                <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
                            </form>

                        </div>




                    </div>
                </div
            </div>

        </div> <!-- /container -->
    </section>
</main>

<?php
include_once "views/layout/footer.php";

?>