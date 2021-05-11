<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crowdme</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../resourse/assets/css/bootstrap-reboot.min.css">

    <link rel="stylesheet" href="../../resourse/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../resourse/assets/css/style.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 header_logo">
                <div class="logo">
                    <a href="/"><img src="../../resourse/assets/img/logo/logo.png" alt="Логотип" class="logo_img"></a>
                </div>
            </div>

            <div class="col-md-8 col-lg-7 col-xl-8 header_nav">
                <nav class="nav_haeder">
                    <ul class="nav">
                        <li><a href="/news">Новости</a> </li>
                        <li><a href="/app">Приложения</a></li>
                        <li><a href="/contact">Контакты</a></li>
                        <?php // session_start()?>
                        <?php if(isset($_SESSION['logined']) and $_SESSION['logined']===true):?>
                            <?php switch ($_SESSION['admin']){

                                case 1: echo '<li class="menu_ht_item"><a href="/admin" class="menu_link">Админка</a></li>'; break;
                                case 2: echo '<li class="menu_ht_item"><a href="/admin" class="menu_link">Модераторская</a></li>'; break;
                            }
                            ?>
                            <li class="menu_ht_item"><a href="/profile" class="menu_link">Профиль</a></li>
                            <li class="menu_ht_item"><a href="/logout" class="menu_link">Выход</a></li>
                        <?php else:?>
                            <li class="menu_ht_item"><a href="/login" class="menu_link">Вход</a></li>
                            <li class="menu_ht_item"><a href="/register" class="menu_link">Регистрация</a></li>
                        <?php endif;?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-1 header_btn_div">
                <button class="btn_header">
                    <i class="fab fa-angellist"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="header_two">
    <div class="container">
        <ul class="menu_header_two">
            <li class="menu_ht_item"><a href="/" class="menu_link">Главная</a></li>
            <li class="menu_ht_item"><a href="/news" class="menu_link">Новости</a></li>
            <li class="menu_ht_item"><a href="/app" class="menu_link">Приложения</a></li>
            <li class="menu_ht_item"><a href="/contact" class="menu_link">Контакты</a></li>
            <?php // session_start()?>
            <?php if(isset($_SESSION['logined']) and $_SESSION['logined']===true):?>
                <?php switch ($_SESSION['admin']){

                    case 1: echo '<li class="menu_ht_item"><a href="/admin" class="menu_link">Админка</a></li>'; break;
                    case 2: echo '<li class="menu_ht_item"><a href="/admin" class="menu_link">Модераторская</a></li>'; break;
                }
                ?>
                <li class="menu_ht_item"><a href="/profile" class="menu_link">Профиль</a></li>
                <li class="menu_ht_item"><a href="/logout" class="menu_link">Выход</a></li>
            <?php else:?>
                <li class="menu_ht_item"><a href="/login" class="menu_link">Вход</a></li>
                <li class="menu_ht_item"><a href="/register" class="menu_link">Регистрация</a></li>
            <?php endif;?>
        </ul>
    </div>
</div>

<div class="gamburger">
    <div class="gamburger_wrapper">
        <div class="gamburger_menu">
            <span class="span"></span>
            <span class="span"></span>
            <span class="span"></span>
        </div>
    </div>
</div>




