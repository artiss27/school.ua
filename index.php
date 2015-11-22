<?php
error_reporting(-1);
ini_set('display_errors', 1);
header('Content-Type: text/html; charset=utf-8');
//session_start();
?>
</body>
</html>
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


    <!-- Demo CSS -->
    <link rel="stylesheet" href="/styles/flexslider/flexslider.css" type="text/css" media="screen"/>

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
    <!-- Place somewhere in the <body> of your page -->
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="/img/6/slide.jpg"/>
            </li>
            <li>
                <img src="/img/6/slide-1.jpg"/>
            </li>
            <li>
                <img src="/img/6/slide-2.jpg"/>
            </li>
        </ul>
    </div>
    Основное содержание страницы
</main>

<footer>
    Подвал сайта, Копирайты
</footer>
<!-- FlexSlider -->
<script defer src="/js/jquery.flexslider-min.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });
</script>

</body>
</html>