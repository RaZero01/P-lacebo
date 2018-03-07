<?php
require_once 'vendor/autoload.php';

$contacts = array(
    array(
        'name' => 'Пискарев Даниил',
        'job' => 'Креативный директор',
        'description' => 'По вопросам приобретения продукции и сотрудничества:',
        'phone' => '+7 (926) 959-17-27',
        'email' => 'piskarev@p-lacebo.com',
        'facebook' => 'https://www.facebook.com/biology.daniil',
        'instagram' => 'https://www.instagram.com/biologydaniil/'
    ),
    array(
        'name' => 'Разинков Константин',
        'job' => 'IT-директор',
        'description' => 'По вопросам IT-сотрудничества:',
        'phone' => '',
        'email' => 'it-director@p-lacebo.com',
        'facebook' => '',
        'instagram' => ''
    ),
    array(
        'name' => 'Соколовский Иван',
        'job' => 'Системный администратор',
        'description' => 'Техническая поддержка:',
        'phone' => '',
        'email' => 'support@p-lacebo.com',
        'facebook' => '',
        'instagram' => ''
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader);

$template = $twig->load('contacts.twig');
echo $template->render(array('contacts' => $contacts, 'currentYear' => date("Y")));