<?php
require_once 'vendor/autoload.php';

$collection = array(
    'title' => "Коллекция «Bio Shuimohua»",
    'description' => "Коллекция «Bio Shuimohua» создана в соавторстве с Анастасией Суравневой. Картины нарисованы тушью на холсте в стиле шуймохуа. Большое влияние на создание коллекции оказало традиционное искусство Китая и Японии. Уверены, что эти необычные картины, сочетающие в себе древнюю восточную философию и современное европейское искусство, украсят ваш интерьер.",
    'partner_name' => "Анастасия Суравнева",
    'partner_url' => '',
    'partner_job' => 'Художница',
    'partner_img' => 'img/Bio%20Shuimohua/Partner1.jpg',
    'partner_bottom_name' => "Студия ДАВИНЧИ",
    'partner_bottom_url' => 'http://davincist.ru/',
    'partner_bottom_job' => 'Технический партнер',
    'partner_bottom_img' => 'img/Bio%20Shuimohua/Partner2.jpg',
    'items' => array(
        array(
            'slides' => array(
                array(
                    'caption_title' => "Картина \"Ветка сакуры\"\nАнастасия Суравнева & Даниил Пискарев",
                    'caption_description' => "Холст. Тушь.
                    Изображен белок Селеноцистеинсинтетаза. Данный белок синтезирует одну из важнейших аминокислот – Селеноцистеин.",
                    'img' => 'img/Bio%20Shuimohua/Photo1.jpg'
                )
            ),
            'title' => '"Ветка сакуры"',
            'img' => 'img/Bio%20Shuimohua/Photo1.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => ">Картина \"Голубая гортензия\"\nАнастасия Суравнева & Даниил Пискарев",
                    'caption_description' => "Холст. Тушь.
                    Изображен белок Бета-галактозидаза. Данный белок участвует в переваривании молока и клеточном пищеварении.",
                    'img' => 'img/Bio%20Shuimohua/Photo2.jpg'
                )
            ),
            'title' => '"Голубая гортензия"',
            'img' => 'img/Bio%20Shuimohua/Photo2.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Картина \"Панда\"\nАнастасия Суравнева & Даниил Пискарев",
                    'caption_description' => "Холст. Тушь.
                    Изображен белковый комплекс Цитохром bc1. Данный белковый комплекс участвует в создании энергии в клетке.",
                    'img' => 'img/Bio%20Shuimohua/Photo3.jpg'
                )
            ),
            'title' => '"Панда"',
            'img' => 'img/Bio%20Shuimohua/Photo3.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Картина \"Танцующая девушка\"\nАнастасия Суравнева & Даниил Пискарев",
                    'caption_description' => "Холст. Тушь.
                    Изображен рецептор Эстрогена. Эстроген – женский половой гормон.",
                    'img' => 'img/Bio%20Shuimohua/Photo4.jpg'
                )
            ),
            'title' => '"Танцующая девушка"',
            'img' => 'img/Bio%20Shuimohua/Photo4.jpg'
        )
    )
);
$title = 'Bio Shuimohua';
$keywords = array('Bio Shuimohua', 'ART P-lacebo');
$description = 'Bio Shuimohua P-lacebo';

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('collection.twig');
echo $template->render(array('collection' => $collection, 'title' => $title, 'keywords' => $keywords, 'description' => $description));