<?php
return array(

    'ajax/news'=>'ajax/index', // подгрузка новостей при скролле

    'admin/moder/delete'=>'adminmoder/delete',
    'admin/comment/add'=>'admincomment/add',
    'admin/comment/delete'=>'admincomment/delete',
    'admin/app/add'=>'adminapp/add',
    'admin/app/delete'=>'adminapp/delete',
    'admin/news/add'=>'adminnews/add',// страница добавления новостей
    'admin/news/delete'=>'adminnews/delete',// страница удаления новостей
    'admin'=>'admin/index',// страница админки

    'profile'=>'profile/index', // страница профиля пользователя
    'change'=>'change/index',// страница изменения данных пользователя
    'logoutandlogin'=>'logoutandlogin/index',

    'logout'=>'logout/index', // выход зарегестрированного пользователя

    'login'=>'login/index', // страница входа на сайт

    'register'=>'register/index',// страница регистрации на сайте

    'contact'=>'contact/index',// страница с контактами

    'app/([0-9]+)'=>'app/view/$1',// страница одного приложения
    'app'=>'app/index',// страница всех приложений

    'news/([0-9]+)'=>'news/view/$1',// страница одной новости
    'news'=>'news/index',// страница всех новостей

    ''=>'site/index'// главная страница
);