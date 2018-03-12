<?php
require_once 'vendor/autoload.php';

$title = 'Предметы интерьера';
$keywords = array('Предметы интерьера', 'P-lacebo');
$description = 'Предметы интерьера P-lacebo';
$blocks = array(
    array(
        'url' => 'Bio pillow.html',
        'name' => 'ПОДУШКИ',
        'img' => 'img/Interior/Bio%20pillow/Group%20Photo.jpg',
        'description' => "Коллецкия «Bio pillow»"
    ),
    array(
        'url' => 'Bio magnets.html',
        'name' => "МАГНИТЫ",
        'img' => 'img/Interior/Magnets/Group%20Photo.jpg',
        'description' => "Коллекция «Bio magnets»"
    ),
    array(
        'url' => 'Napkins.html',
        'name' => "ЛЬНЯНЫЕ САЛФЕТКИ",
        'img' => 'img/Interior/Napkins/Group%20Photo.jpg',
        'description' => "Коллекция «Bio Wipes»"
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('collections.twig');
echo $template->render(array('blocks' => $blocks, 'title' => $title, 'keywords' => $keywords, 'description' => $description));