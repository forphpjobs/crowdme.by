<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="../../resourse/assets/css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="../../resourse/assets/css/plugins.css" />
    <link rel="stylesheet" href="../../resourse/assets/css/opensans-web-font.css" />
    <link rel="stylesheet" href="../../resourse/assets/css/montserrat-web-font.css" />

    <!--For font-awesome css-->
    <link rel="stylesheet" href="../../resourse/assets/css/font-awesome.min.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="../../resourse/assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="../../resourse/assets/css/responsive.css" />

    <script src="../../resourse/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<nav class="mainmenu navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">

                    <li><a href="/">Главная</a></li>
                    <li><a href="/news">Новости</a></li>
                    <li><a href="/app">Приложения</a></li>
                    <li><a href="/contact">Контакты</a></li>


                    <?php if(isset($_SESSION['logined']) and $_SESSION['logined']===true):?>
                        <?php switch ($_SESSION['admin']){

                            case 1: echo '<li><a href="admin">Админка</a></li>'; break;
                            case 2: echo '<li><a href="admin">Модераторская</a></li>'; break;
                        }
                        ?>
                        <li><a href="profile">Профиль</a></li>
                        <li><a href="logout">Выход</a></li>
                    <?php else:?>
                    <li><a href="/login">Вход</a></li>
                    <li><a href="/register">Регистрация</a></li>
                    <?php endif;?>


                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </div><!-- /.container-fluid -->
</nav>