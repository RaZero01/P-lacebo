<?php
require_once 'vendor/autoload.php';

$collection = array(
    'title' => "",
    'description' => "",
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
                    'caption_title' => "",
                    'caption_description' => "",
                    'img' => ''
                )
            ),
            'title' => '',
            'img' => ''
        )
    )
);
$title = '';
$keywords = array('', 'P-lacebo');
$description = ' P-lacebo';

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('collection.twig');
echo $template->render(array('collection' => $collection, 'title' => $title, 'keywords' => $keywords, 'description' => $description));