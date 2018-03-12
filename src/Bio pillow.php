<?php
require_once 'vendor/autoload.php';

$collection = array(
    'title' => "Коллекция «Bio pillow»",
    'description' => "Данная коллекция представляет собой набор дизайнерских подушек ручной работы. Рисунки белков нанесены методом термотрансфера. Каждая подушка эксклюзивна и сделана в единственном экземпляре. Мы надеемся, что наши подушки принесут тепло и уют в Ваш дом.",
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
                    'caption_title' => "Подушка \"Танцующая девушка\"\nДаниил Пискарев",
                    'caption_description' => "Термотрансферная печать. Смесовая ткань.
                    Изображен рецептор Эстрогена. Эстроген - это женский половой гормон.",
                    'img' => 'img/Interior/Bio%20pillow/Photo1.jpg'
                )
            ),
            'title' => '"Танцующая девушка"',
            'img' => 'img/Interior/Bio%20pillow/Photo1.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Подушка \"Солярис\"\nДаниил Пискарев",
                    'caption_description' => "Термотрансферная печать. Смесовая ткань.
                    Изображен белок Бета-галактозидаза. Бета-галактозидаза - это фермент в желудочно-кишечном тракте, катализирующий расщепление лактозы.",
                    'img' => 'img/Interior/Bio%20pillow/Photo2.jpg'
                )
            ),
            'title' => '"Солярис"',
            'img' => 'img/Interior/Bio%20pillow/Photo2.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Подушка \"Бабочка\"\nДаниил Пискарев",
                    'caption_description' => "Термотрансферная печать. Смесовая ткань.
                    Изображен кофермент М. Кофермент М - это кофермент, участвующий в процессе метаногенеза.",
                    'img' => 'img/Interior/Bio%20pillow/Photo3.jpg'
                )
            ),
            'title' => '"Бабочка"',
            'img' => 'img/Interior/Bio%20pillow/Photo3.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => " Подушка \"Коралл\"\nДаниил Пискарев",
                    'caption_description' => "Термотрансферная печать. Смесовая ткань.
                    Изображен белок Аминопептидаза. Аминопептидаза - фермент кишечного сока, катализирующий гидролиз аминокислот в полипептидах.",
                    'img' => 'img/Interior/Bio%20pillow/Photo4.jpg'
                )
            ),
            'title' => '"Коралл"',
            'img' => 'img/Interior/Bio%20pillow/Photo4.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Подушка \"Стрела\"\nДаниил Пискарев",
                    'caption_description' => "Термотрансферная печать. Смесовая ткань.
                    Изображен белок Амилоид.",
                    'img' => 'img/Interior/Bio%20pillow/Photo5.jpg'
                )
            ),
            'title' => '"Стрела"',
            'img' => 'img/Interior/Bio%20pillow/Photo5.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => " Подушка \"Цветочный дуэт\"\nДаниил Пискарев",
                    'caption_description' => "Термотрансферная печать. Смесовая ткань.
                    Изображен белок Глутаминсинтетаза. Глутаминсинтетаза выполняет функцию синтеза аминокислоты глутамина.",
                    'img' => 'img/Interior/Bio%20pillow/Photo6.jpg'
                )
            ),
            'title' => '"Цветочный дуэт"',
            'img' => 'img/Interior/Bio%20pillow/Photo6.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Подушка \"Движение вверх\"\nДаниил Пискарев",
                    'caption_description' => "Термотрансферная печать. Смесовая ткань.
                    Изображен белок Нитрогеназа. Нитрогеназа  — мультифермент, осуществляющий процесс фиксации атмосферного азота.",
                    'img' => 'img/Interior/Bio%20pillow/Photo7.jpg'
                )
            ),
            'title' => '"Движение вверх"',
            'img' => 'img/Interior/Bio%20pillow/Photo7.jpg'
        )
    )
);
$title = 'Подушки';
$keywords = array('Подушки', 'P-lacebo');
$description = 'Подушки P-lacebo';

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('collection.twig');
echo $template->render(array('collection' => $collection, 'title' => $title, 'keywords' => $keywords, 'description' => $description));