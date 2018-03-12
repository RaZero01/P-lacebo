<?php
require_once 'vendor/autoload.php';

$collection = array(
    'title' => "Коллекция «Bio-Polo»",
    'description' => "Коллекция «Bio-Polo» создана в соавторстве  с дизайнером машинной вышивки Ингой Крупельницкой. Данная коллекция сделана с применением метода машинной вышивки для нанесения рисунков белковых структур. Сейчас рубашки-поло  снова в тренде! И среди молодежи и людей королевского возраста. Рубашки-поло актуальны  и в мужском, и женском гардеробе. Это незаменимый элемент спортивной одежды и  стиля «smart casual».
    Наша компания предлагает  разнообразную коллекцию рубашек-поло, выполненную в стиле био-тек.",
    'partner_name' => "Инга Крупельницкая",
    'partner_url' => 'http://localhost:3000/Inga.php',
    'partner_job' => 'Творческий партнер',
    'partner_img' => 'img/Clothes/Bio%20polo/Partner.png',
    'partner_bottom_name' => "",
    'partner_bottom_url' => '',
    'partner_bottom_job' => '',
    'partner_bottom_img' => '',
    'items' => array(
        array(
            'slides' => array(
                array(
                    'caption_title' => "Рубашка-поло \"Red-insulin\"\nИнга Крупельницкая & Даниил Пискарев",
                    'caption_description' => "100% хлопок. Машинная вышивка.
                    Изображен гормон Инсулин. Данный белковый комплекс помогает в регуляции уровня глюкозы в крови.",
                    'img' => 'img/Clothes/Bio%20polo/Photo1.jpg'
                )
            ),
            'title' => '"Red-insulin"',
            'img' => 'img/Clothes/Bio%20polo/Photo1.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Рубашка-поло \"Клевер\"\nИнга Крупельницкая & Даниил Пискарев",
                    'caption_description' => "100% хлопок. Машинная вышивка.
                    Изображён белок Апоптосома. Данный белок входит в состав противораковой иммунной системы.",
                    'img' => 'img/Clothes/Bio%20polo/Photo2.jpg'
                )
            ),
            'title' => '"Клевер"',
            'img' => 'img/Clothes/Bio%20polo/Photo2.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Рубашка-поло \"Бег времени\"\nИнга Крупельницкая & Даниил Пискарев",
                    'caption_description' => "100% хлопок. Машинная вышивка.
                    Изображен белок Клатрин. Данный белок участвует в клеточном питании и работе иммунной системы.",
                    'img' => 'img/Clothes/Bio%20polo/Photo3.jpg'
                )
            ),
            'title' => '"Бег времени"',
            'img' => 'img/Clothes/Bio%20polo/Photo3.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Рубашка-поло \"Рождение жемчужины\"\nИнга Крупельницкая & Даниил Пискарев",
                    'caption_description' => "100% хлопок. Машинная вышивка.
                    Изображен гормон Инсулин. Данный белковый комплекс помогает в регуляции уровня глюкозы в крови.",
                    'img' => 'img/Clothes/Bio%20polo/Photo4.jpg'
                )
            ),
            'title' => '"Рождение жемчужины"',
            'img' => 'img/Clothes/Bio%20polo/Photo4.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Рубашка-поло \"Цветок жизни\"\nИнга Крупельницкая & Даниил Пискарев",
                    'caption_description' => "100% хлопок. Машинная вышивка.
                    Изображен белковый комплекс протонного насоса. Он участвует в процессе создания энергии в клетках.",
                    'img' => 'img/Clothes/Bio%20polo/Photo5.jpg'
                )
            ),
            'title' => '"Цветок жизни"',
            'img' => 'img/Clothes/Bio%20polo/Photo5.jpg'
        ),
        array(
            'slides' => array(
                array(
                    'caption_title' => "Рубашка-поло \"Венец\"\nИнга Крупельницкая & Даниил Пискарев",
                    'caption_description' => "100% хлопок. Машинная вышивка.
                    Изображен ядерный пористый комплекс. Данный белковый комплекс выполняет транспортную функцию внутри клеток.",
                    'img' => 'img/Clothes/Bio%20polo/Photo6.jpg'
                )
            ),
            'title' => '"Венец"',
            'img' => 'img/Clothes/Bio%20polo/Photo6.jpg'
        )
    )
);
$title = 'Рубашки-поло';
$keywords = array('Рубашки-поло', 'Одежда P-lacebo');
$description = 'Рубашки-поло P-lacebo';

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('collection.twig');
echo $template->render(array('collection' => $collection, 'title' => $title, 'keywords' => $keywords, 'description' => $description));