<?php
require_once 'vendor/autoload.php';

$blocks = array(
    array(
        'url' => 'http://www.photosale.ru/',
        'name' => 'Магазин фототоваров',
        'img' => 'img/Partners/Partner1.jpg',
        'description' => "«ФотоСейл»"
    ),
    array(
        'url' => 'https://www.fotolab.ru/',
        'name' => "Профессиональная\nфотолаборатория",
        'img' => 'img/Partners/Partner2.jpg',
        'description' => "«Фотолаб»"
    ),
    array(
        'url' => 'http://davincist.ru/',
        'name' => "Студия печати",
        'img' => 'img/Partners/Partner3.jpg',
        'description' => "«ДАВИНЧИ»"
    ),
    array(
        'url' => 'http://ruspie.ru/',
        'name' => "Пекарня",
        'img' => 'img/Partners/Partner4.jpg',
        'description' => "«Русъпай»"
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache'));

$template = $twig->load('partners.twig');
echo $template->render(array('blocks' => $blocks, 'currentYear' => date("Y")));