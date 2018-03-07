<?php
require_once 'vendor/autoload.php';

$blocks = array(
    array(
        'url' => 'Daniil.php',
        'name' => 'Даниил Пискарев',
        'img' => 'img/About/Photo1.jpg',
        'job' => 'Креативный директор'
    ),
    array(
        'url' => 'Contacts.php',
        'name' => 'Константин Разинков',
        'img' => 'img/About/Photo2.jpg',
        'job' => 'IT-директор'
    ),
    array(
        'url' => 'Inga.php',
        'name' => 'Инга Крупельницкая',
        'img' => 'img/About/Photo3.jpg',
        'job' => 'Дизайнер'
    ),
    array(
        'url' => 'Alena.php',
        'name' => 'Алена Матвеева',
        'img' => 'img/About/Photo4.jpg',
        'job' => 'Художница'
    ),
    array(
        'url' => '',
        'name' => 'Анастасия Суравнева',
        'img' => 'img/About/Photo5.jpg',
        'job' => 'Художница'
    ),
    array(
        'url' => 'Igor.php',
        'name' => 'Игорь Пискарев',
        'img' => 'img/About/Photo6.jpg',
        'job' => 'Фотограф'
    ),
    array(
        'url' => 'Andrey.php',
        'name' => 'Андрей Шевченко',
        'img' => 'img/About/Photo7.jpg',
        'job' => 'Ювелир'
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader);

$template = $twig->load('about.twig');
echo $template->render(array('blocks' => $blocks, 'currentYear' => date("Y")));