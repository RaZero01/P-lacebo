<?php
require_once 'vendor/autoload.php';

$partner = array(
    'title' => 'Фотограф Игорь Пискарев',
    'url' => '',
    'name' => 'Игорь Пискарев',
    'photo' => 'img/Igor/Photo.jpg',
    'facebook' => '',
    'instagram' => 'https://www.instagram.com/igor_piskarev_/',
    'phone' => '8 926 811 84 87',
    'email' => 'photopisk@gmail.com',
    'description' => "Игорь Пискарев - член Гильдии фотографов и Союза журналистов России. Фотограф сотрудничает со многими популярными глянцевыми журналами, участник Первого, Второго, Третьего и Четвертого музейных фотобиеннале, проходивших в Государственном Русском музее в Санкт-Петербурге.
    Фотографии Игоря Пискарева хранятся во многих частных собраниях в России и за рубежом, а также в Государственном Русском музее в Санкт-Петербурге."
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache'));

$template = $twig->load('partner.twig');
echo $template->render(array('partner' => $partner, 'currentYear' => date("Y")));