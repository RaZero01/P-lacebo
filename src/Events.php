<?php
require_once 'vendor/autoload.php';

$title = 'События';
$keywords = array('События', 'P-lacebo');
$description = 'События P-lacebo';
$blocks = array(
    array(
        'name' => "Презентация коллекции «Bio jewellry»",
        'img' => 'img/Events/Photo1.jpg',
    ),
    array(
        'name' => "Картина в дар для\nГосударственного Дарвиновского Музея",
        'img' => 'img/Events/Photo2.jpg',
    ),
    array(
        'name' => "Персональная выставка\nв центре дизайна ARTPLAY",
        'img' => 'img/Events/Photo3.jpg',
    ),
    array(
        'name' => "Материал в журнале «Мой любимый дом»",
        'img' => 'img/Events/Photo4.jpg',
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('events.twig');
echo $template->render(array('blocks' => $blocks, 'title' => $title, 'keywords' => $keywords, 'description' => $description));