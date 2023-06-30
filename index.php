<?php 
header('Content-Type: application/xml; charset=utf-8');
include_once 'config/Database.php';
include_once 'class/Topic.php';
$database = new Database();
$db = $database->getConnection();
$topicObj = new Topic($db);
$topics = $topicObj->getTopic();
$baseUrl = 'http://localhost/projecDemo/xml-sitemap-with-php-mysql-demo/'; 
echo '<?xml version="1.0" encoding="UTF-8"?>'. PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    '. PHP_EOL;
    while ($topic = $topics->fetch_assoc()) {
    $url = $topicObj->createSeoUrl($topic['id'], $topic['subject']);
    $date = str_replace('/', '-', $topic['created']);
    echo '<url>';
        echo '<loc>'.$baseUrl.$url.'</loc>'. PHP_EOL;
        echo '<lastmod>'.date("Y-m-d", strtotime($date)).'T'.date("H-i-s", strtotime($date)).'Z</lastmod>'. PHP_EOL;
        echo '</url>';
    }
    echo '</urlset>'. PHP_EOL;
?>