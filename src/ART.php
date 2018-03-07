<?php
require_once 'vendor/autoload.php';

$blocks = array(
    array(
        'url' => 'God Inside Us.html',
        'name' => 'КАРТИНЫ НА ХОЛСТЕ',
        'img' => 'img/God%20Inside%20Us/Group%20Photo.jpg',
        'description' => "Коллекция\n«Тайнопись Бога внутри нас»"
    ),
    array(
        'url' => 'Proteins Inside Us.html',
        'name' => "ФОТОКАРТИНЫ",
        'img' => 'img/Proteins%20Inside%20Us/Group%20Photo.jpg',
        'description' => "Коллекция\n«Мир белков внутри нас»"
    ),
    array(
        'url' => 'Bas-relief.html',
        'name' => "ФОТОКАРТИНЫ",
        'img' => 'img/Bas-relief/Group%20Photo.jpg',
        'description' => "Коллекция\n«Bio Bas-relief»"
    ),
    array(
        'url' => 'Bio Shuimohua.html',
        'name' => "КАРТИНЫ НА ХОЛСТЕ",
        'img' => 'img/Bio%20Shuimohua/Group%20Photo.jpg',
        'description' => "Коллекция\n«Bio Shuimohua»"
    ),
    array(
        'url' => 'Embroidery.html',
        'name' => "ВЫШИТЫЕ КАРТИНЫ",
        'img' => 'img/Embroidery/Photo1.jpg',
        'description' => "Коллекция\n«Art Embroidery»"
    ),
    array(
        'url' => 'Seasons.html',
        'name' => "КАРТИНЫ НА ХОЛСТЕ",
        'img' => 'img/Seasons/Photo1.jpg',
        'description' => "Коллекция\n«Времена года»"
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader);

$template = $twig->load('collections.twig');
echo $template->render(array('blocks' => $blocks, 'currentYear' => date("Y")));