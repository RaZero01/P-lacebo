<?php
require_once 'vendor/autoload.php';

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

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache'));

$template = $twig->load('index.twig');
echo $template->render(array('blocks' => $blocks, 'currentYear' => date("Y")));