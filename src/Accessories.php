<?php
require_once 'vendor/autoload.php';

$blocks = array(
    array(
        'url' => 'Umbrellas.html',
        'name' => 'ЗОНТЫ',
        'img' => 'img/Accessories/Umbrellas/Group%20Photo.jpg',
        'collection' => "Коллекция\n«Bio umbrella»"
    ),
    array(
        'url' => 'Cases.html',
        'name' => "ЧЕХЛЫ\nДЛЯ СМАРТФОНОВ",
        'img' => 'img/Accessories/Cases/Group%20Photo.jpg',
        'collection' => 'Чехлы для смартфонов'
    ),
    array(
        'url' => 'Jewelry.html',
        'name' => "ЮВЕЛИРНЫЕ\nУКРАШЕНИЯ",
        'img' => 'img/Accessories/Jewelry/Group%20Photo.jpg',
        'collection' => "Коллекция\n«BIO-Jewelry»"
    ),
    array(
        'url' => 'Women handkerchiefs.html',
        'name' => "ЖЕНСКИЕ\nНОСОВЫЕ ПЛАТОЧКИ",
        'img' => 'img/Accessories/Women%20handkerchiefs/Group%20Photo.jpg',
        'collection' => "Коллекция\n«Bio-shawl»"
    ),
    array(
        'url' => 'Men handkerchiefs.html',
        'name' => "МУЖСКИЕ\nНОСОВЫЕ ПЛАТКИ",
        'img' => 'img/Accessories/Men%20handkerchiefs/Group%20Photo.jpg',
        'collection' => "Коллекция\n«Bio-shawl»"
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader);

$template = $twig->load('accessories.twig');
echo $template->render(array('blocks' => $blocks, 'currentYear' => date("Y")));