<?php include_once "views/layout/header.php";
$id=$_SESSION['user']['id'];
$name=$_SESSION['user']['name'];
$email=$_SESSION['user']['email'];
$admin=$_SESSION['user']['admin'];
$foto=$_SESSION['user']['foto'];

?>
<main class="crowded_contacts">
<section id="promotion-area" class="profile">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-xs-12">
                <div class="profile_card" >
                    <div class="profile_card_img">
                        <img class="card-img-top" src="<?php echo $foto;?>" alt="Card image">
                    </div>

                    <div class="card-body profile_card_text">
                        <h4 class="card-title"><?php echo $name; ?></h4>
                        <p class="card-text">Ваш e-mail: <?php echo $email?></p>
                        <?php
                            switch ($admin){

                                case 0: echo '<p class="card-text">Вы зарегестрированы как: Пользователь.<?php echo $email?></p>'; break;
                                case 1: echo '<p class="card-text">Вы зарегестрированы как: Администратор.<?php echo $email?></p>'; break;
                                case 2: echo '<p class="card-text">Вы зарегестрированы как: Модератор.<?php echo $email?></p>'; break;

                            }


                        ?>

                        <a href="change" class="btn btn-primary">Изменить данные</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>






<?php include_once "views/layout/footer.php"; ?>
