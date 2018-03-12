<?php
require_once 'vendor/autoload.php';

$collection = array(
    'title' => "Коллекция «Bio Bas-relief»",
    'description' => "Коллекция «Bio Bas-relief» сделана при помощи метода фотопечати с последующей накаткой на основу пластика (ПВХ). Благодаря данной технике, картины получаются объёмными,  а из-за физических свойств пластика, они влагоустойчивы. Работы создаются с учетом персональных предпочтений заказчика: осуществляется подбор белка, фона, рамы и размера работы, и цветовой гаммы предполагаемого интерьера.",
    'partner_name' => "Студия ДАВИНЧИ",
    'partner_url' => 'http://davincist.ru/',
    'partner_job' => 'Технический партнер',
    'partner_img' => 'img/Bas-relief/Partner.jpg',
    'partner_bottom_name' => "",
    'partner_bottom_url' => '',
    'partner_bottom_job' => '',
    'partner_bottom_img' => '',
    'items' => array(
        array(
            'slides' => array(
                array(
                    'caption_title' => "\"Дракон удачи\"\nДаниил Пискарев",
                    'caption_description' => "Фотопечать, основа пластик.
                    Изображен белок RecA. Данный белок помогает в регуляции работы ДНК.",
                    'img' => 'img/Bas-relief/Photo1Big.jpg'
                ),
                array(
                    'caption_title' => "\"Дракон удачи\"\nДаниил Пискарев",
                    'caption_description' => "Фотопечать, основа пластик.
                    Изображен белок RecA. Данный белок помогает в регуляции работы ДНК.",
                    'img' => 'img/Bas-relief/Photo1.jpg'
                )
            ),
            'title' => '"Дракон удачи"',
            'img' => 'img/Bas-relief/Photo1.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "\"Смерч\"\nДаниил Пискарев",
                    'caption_description' => "Фотопечать, основа пластик.
                    Изображены TAL эффекторы. Данный белковый комплекс помогает в регуляции работы ДНК.",
                    'img' => 'img/Bas-relief/Photo2Big.jpg'
                ),
                array(
                    'caption_title' => "\"Смерч\"\nДаниил Пискарев",
                    'caption_description' => "Фотопечать, основа пластик.
                    Изображены TAL эффекторы. Данный белковый комплекс помогает в регуляции работы ДНК.",
                    'img' => 'img/Bas-relief/Photo2.jpg'
                )
            ),
            'title' => '"Смерч"',
            'img' => 'img/Bas-relief/Photo2.jpg'
        )
    )
);
$title = 'Коллекция "Bio Bas-relief"';
$keywords = array('Коллекция "Bio Bas-relief"', 'ART P-lacebo');
$description = 'Коллекция "Bio Bas-relief" P-lacebo';

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('collection.twig');
echo $template->render(array('collection' => $collection, 'title' => $title, 'keywords' => $keywords, 'description' => $description));