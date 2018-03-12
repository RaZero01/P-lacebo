<?php
require_once 'vendor/autoload.php';

$title = 'О компании';
$keywords = array('p-lacebo', 'Даниил Пискарев', 'Команда P-lacebo');
$description = 'Команда P-lacebo';
$blocks = array(
    array(
        'url' => 'Daniil.php',
        'name' => 'Даниил Пискарев',
        'img' => 'img/About/Photo1.jpg',
        'description' => 'Креативный директор'
    ),
    array(
        'url' => 'Contacts.php',
        'name' => 'Константин Разинков',
        'img' => 'img/About/Photo2.jpg',
        'description' => 'IT-директор'
    ),
    array(
        'url' => 'Inga.php',
        'name' => 'Инга Крупельницкая',
        'img' => 'img/About/Photo3.jpg',
        'description' => 'Дизайнер'
    ),
    array(
        'url' => '',
        'name' => 'Анастасия Суравнева',
        'img' => 'img/About/Photo5.jpg',
        'description' => 'Художница'
    ),
    array(
        'url' => 'Contacts.php',
        'name' => 'Иван Соколовский',
        'img' => 'img/About/Photo8.jpg',
        'description' => 'Техническая поддержка'
    ),
    array(
        'url' => 'Igor.php',
        'name' => 'Игорь Пискарев',
        'img' => 'img/About/Photo6.jpg',
        'description' => 'Фотограф'
    ),
    array(
        'url' => 'Andrey.php',
        'name' => 'Андрей Шевченко',
        'img' => 'img/About/Photo7.jpg',
        'description' => 'Ювелир'
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('about.twig');
echo $template->render(array('blocks' => $blocks, 'title' => $title, 'keywords' => $keywords, 'description' => $description));