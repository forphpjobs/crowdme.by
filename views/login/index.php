<?php
include_once "models/login.php";

if (isset($_POST['submit'])){

    if(!empty($_POST['email']) and !empty($_POST['pass'])){


    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['pass']);


    $user = login::getPassword($email);
        if ((password_verify($password, $user['password']))){

            session_start();
            $_SESSION['user']=$user;
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['admin']= $user['admin'];
            $_SESSION['logined'] = true;

            header('location: /');

        } else {
            $error = true;
        }
    }

       // register::addNewUser($name,$password,$email,$data,$gender,$foto);

}
?>

<?php include_once "views/layout/header.php"; ?>
    <main class="crowded_contacts">
    <section class="sections">
        <div class="container">
            <!-- Example row of columns -->

            <?php if(isset($error) and $error===true):?>
                <div class="row">
                    <div class="col-sm-12 col-sm-12 col-xs-12">
                        <div class="promotion">

                            <h5>Не правильный пароль или e-mail</h5>

                        </div>
                    </div>
                </div>

            <?php endif;?>


            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12">
                    <div class="promotion">

                        <form action="" method="post" enctype="multipart/form-data" class="login">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Адрес электронной почты</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Пароль</label>
                                <input type="password"  name="pass" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
                        </form>



                    </div>
                </div>
            </div>

        </div> <!-- /container -->
    </section>
    </main>
<?php include_once "views/layout/footer.php";?>