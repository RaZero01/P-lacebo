<?php
require_once 'vendor/autoload.php';

$partner = array(
    'title' => 'Дизайнер – Инга Крупельницкая',
    'url' => '',
    'name' => 'Инга Крупельницкая',
    'photo' => 'img/Inga/Photo.jpg',
    'facebook' => 'https://www.facebook.com/pchelkai',
    'instagram' => 'https://www.instagram.com/mybroidery/',
    'phone' => '',
    'email' => '',
    'description' => "Инга Крупельницкая - дизайнер машинной вышивки.
        До занятия вышивкой Инга шила на заказ одежду и была уверена, что это дело всей ее жизни... Но наступил момент и  она кардинально все поменяла - с нуля занялась машинной вышивкой. И  это занятие Инге безумно нравится! Ведь  оно приносит радость ее заказчикам, которые видят, как могут преобразиться обычные вещи при помощи вышивки. И даже самое обычное изделие с именной вышивкой становится уникальным подарком!"
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader);

$template = $twig->load('partner.twig');
echo $template->render(array('partner' => $partner, 'currentYear' => date("Y")));