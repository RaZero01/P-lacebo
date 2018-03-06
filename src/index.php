<?php
require_once 'vendor/autoload.php';

$blocks = array(
    array(
        'url' => 'ART.html',
        'name' => 'ART',
        'img' => 'img/God Inside Us/Group Photo.jpg'
    ),
    array(
        'url' => 'Accessories.html',
        'name' => 'АКСЕССУАРЫ',
        'img' => 'img/Accessories/Jewelry/Photo8.4.jpg'
    ),
    array(
        'url' => 'Interior.html',
        'name' => 'ПРЕДМЕТЫ ИНТЕРЬЕРА',
        'img' => 'img/Interior/Bio%20pillow/Group%20Photo.jpg'
    ),
    array(
        'url' => 'Clothes.html',
        'name' => 'ОДЕЖДА',
        'img' => 'img/Clothes/Bio%20polo/Group%20Photo.jpg'
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader);

$template = $twig->load('index.twig');
echo $template->render(array('blocks' => $blocks, 'currentYear' => date("Y")));