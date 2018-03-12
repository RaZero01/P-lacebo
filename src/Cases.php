<?php
require_once 'vendor/autoload.php';

$collection = array(
    'title' => "Коллекция «Bio mobile»",
    'description' => "Стильные чехлы для смартфонов из коллекции «Bio mobile» делаются на заказ. Для каждого заказчика делается индивидуальный образец, исходя из модели телефона и личных предпочтений к рисунку белка и цветовой гамме чехла.",
    'partner_name' => "",
    'partner_url' => '',
    'partner_job' => '',
    'partner_img' => '',
    'partner_bottom_name' => "",
    'partner_bottom_url' => '',
    'partner_bottom_job' => '',
    'partner_bottom_img' => '',
    'items' => array(
        array(
            'slides' => array(
                array(
                    'caption_title' => "Чехол \"Бабочка\"\nДаниил Пискарев",
                    'caption_description' => "Чехол для смартфона силиконовый. Глянцевая печать.
                    Изображен белок Селеноцистеинсинтетаза. Данный белок синтезирует одну из важнейших аминокислот – Селеноцистеин.",
                    'img' => 'img/Accessories/Cases/Photo1.jpg'
                )
            ),
            'title' => '"Бабочка"',
            'img' => 'img/Accessories/Cases/Photo1.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Чехол \"Мишка с цветами\"\nДаниил Пискарев",
                    'caption_description' => "Чехол для смартфона пластиковый. Прямая печать.
                    Изображен белок NO-синтетаза. Данный белок помогает регуляции кровообращения и борьбе с бактериями.",
                    'img' => 'img/Accessories/Cases/Photo2.jpg'
                )
            ),
            'title' => '"Мишка с цветами"',
            'img' => 'img/Accessories/Cases/Photo2.jpg'
        )
    )
);
$title = 'Чехлы';
$keywords = array('Чехлы', 'Аксессуары P-lacebo');
$description = 'Чехлы P-lacebo';

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('collection.twig');
echo $template->render(array('collection' => $collection, 'title' => $title, 'keywords' => $keywords, 'description' => $description));