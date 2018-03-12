<?php
require_once 'vendor/autoload.php';

$partner = array(
    'title' => 'Художница – Алена Матвеева',
    'url' => '',
    'name' => 'Алена Матвеева',
    'photo' => 'img/Alena/Photo.jpg',
    'facebook' => 'https://www.facebook.com/profile.php?id=100000973387997',
    'instagram' => 'https://www.instagram.com/alena_v_matveeva/',
    'phone' => '',
    'email' => '',
    'description' => "Алена Матвеева - известная московская художница и психолог.
        Её картины необычные и ни на что не похожи. Спорят историки и искусствоведы, но сходятся в одном: аналогов нет. Уникальность и избранность судьбы воплотились в начертанное Слово. При этом текстовой орнамент живописно самобытен и значим, что для европейской традиции - явление редчайшее.
        То ли это египетско-китайские иероглифы, то ли письмена индейцев Майя. В те старые времена говаривали, что живопись - это действительность, прошедшая через душу творца. В полной мере это относится и к картинам Алены Матвеевой. Только вот итог своих изысканий она зашифровывает, заставляя зрителя искать разгадку..."
);
$title = $partner['name'];
$keywords = array('Художница', $partner['name'], 'P-lacebo');
$description = $partner['title'];

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('partner.twig');
echo $template->render(array('partner' => $partner, 'title' => $title, 'keywords' => $keywords, 'description' => $description));