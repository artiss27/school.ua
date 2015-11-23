<?php
error_reporting(-1);
ini_set('display_errors', 1);
header('Content-Type: text/html; charset=utf-8');
//session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Заголовок страницы</title>
    <meta name="apple-mobile-web-app-title" content="Заголовок без SEO">
    <meta name="description" content="Описание страницы">
    <meta name="keywords" content="Ключевые слова для некоторых поисковиков">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/touch-icon-ipad-retina.png">
    <link href="/styles/style.css" rel="stylesheet">
    <!--<script src="/scripts.js" defer></script>-->
    <script src="/vendor/public/jquery/dist/jquery.min.js"></script>


</head>
<body>
<header>
    Логотип
    <nav>
        Основная навигация
    </nav>
    <!--<div class="mini menu" onclick="$('#menu').toggle('slow');">=</div>-->
    <!--div.header>ul>li*5 далее ажимаем TAB-->
</header>

<main>

    Основное содержание страницы
</main>

<footer>
    Подвал сайта, Копирайты
</footer>

</body>
</html>