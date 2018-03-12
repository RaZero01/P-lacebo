<?php
require_once 'vendor/autoload.php';

$title = 'P-lacebo';
$keywords = array('P-lacebo', 'P-lacebo.com', 'Дизайнер Даниил Пискарёв');
$description = 'Сайт дизайнера Даниила Пискарёва P-lacebo.com';
$blocks = array(
    array(
        'url' => 'ART.php',
        'name' => 'ART',
        'img' => 'img/God Inside Us/Group Photo.jpg'
    ),
    array(
        'url' => 'Accessories.php',
        'name' => 'АКСЕССУАРЫ',
        'img' => 'img/Accessories/Jewelry/Photo8.4.jpg'
    ),
    array(
        'url' => 'Interior.php',
        'name' => 'ПРЕДМЕТЫ ИНТЕРЬЕРА',
        'img' => 'img/Interior/Bio%20pillow/Group%20Photo.jpg'
    ),
    array(
        'url' => 'Clothes.php',
        'name' => 'ОДЕЖДА',
        'img' => 'img/Clothes/Bio%20polo/Group%20Photo.jpg'
    )
);
$slides = array('img/Slide1.jpg');

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('index.twig');
echo $template->render(array('blocks' => $blocks, 'title' => $title, 'keywords' => $keywords, 'description' => $description,
    'slides' => $slides));