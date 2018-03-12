<?php
require_once 'vendor/autoload.php';

$collection = array(
    'title' => "Коллекция «Bio magnets»",
    'description' => "Магнит - милый сувенир, поднимающий настроение. Наша компания создала свою коллекцию магнитов, которая понравится любителям биологии и поклонникам нового необычного дизайна. Эти магниты порадуют и заботливых родителей, которые хотят развивать своих детей.",
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
                    'caption_title' => "Магнит №1",
                    'caption_description' => "Изображен фермент Лактатдегидрогеназа. Он участвует в процессе получение энергии в клетках.",
                    'img' => 'img/Interior/Magnets/Photo1.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo1.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №2",
                    'caption_description' => "Изображен белок Эритрокруорин. Он является разновидностью гемоглобина, находящийся в плазме крови.",
                    'img' => 'img/Interior/Magnets/Photo2.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo2.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №3",
                    'caption_description' => "Изображен Протонный насос. Данный белок транспортирует протоны между клетками.",
                    'img' => 'img/Interior/Magnets/Photo3.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo3.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №4",
                    'caption_description' => "Изображен белок Пепсин. Пепсин – фермент кишечного сока.",
                    'img' => 'img/Interior/Magnets/Photo4.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo4.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №5",
                    'caption_description' => "Изображен белок Серотонин. Серотонин – гормон счастья.",
                    'img' => 'img/Interior/Magnets/Photo5.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo5.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №6",
                    'caption_description' => "Изображен белок Тетраэдра. Данный помогает поддерживать форму клеток.",
                    'img' => 'img/Interior/Magnets/Photo6.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo6.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №7",
                    'caption_description' => "Изображен белок Эритрокруорин. Он является разновидностью гемоглобина, находящийся в плазме крови.",
                    'img' => 'img/Interior/Magnets/Photo7.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo7.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №8",
                    'caption_description' => "Изображен А-капсид.",
                    'img' => 'img/Interior/Magnets/Photo8.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo8.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №9",
                    'caption_description' => "Изображен белок NO-синтетаза. Данный белок помогает регуляции кровообращения и борьбе с бактериями.",
                    'img' => 'img/Interior/Magnets/Photo9.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo9.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №10",
                    'caption_description' => "Изображен белок гемоглобин. Гемоглобин транспортирует кислород и углекислый газ в крови.",
                    'img' => 'img/Interior/Magnets/Photo10.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo10.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №11",
                    'caption_description' => "Изображен белок Лизоцим. Лизоцим – это пищеварительный белок, входящий в состав слюны.",
                    'img' => 'img/Interior/Magnets/Photo11.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo11.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Магнит №12",
                    'caption_description' => "Изображен белок Пепсин. Пепсин – фермент кишечного сока.",
                    'img' => 'img/Interior/Magnets/Photo12.jpg'
                )
            ),
            'title' => '',
            'img' => 'img/Interior/Magnets/Photo12.jpg'
        ),
    )
);
$title = 'Магниты';
$keywords = array('Магниты', 'P-lacebo');
$description = 'Магниты P-lacebo';

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('collection.twig');
echo $template->render(array('collection' => $collection, 'title' => $title, 'keywords' => $keywords, 'description' => $description));