<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    <link rel="dns-prefetch" href="адрес сайта для запроса ДНС"> тут запрашиваем ДНС заранее
    <link rel="prefetch" href="адрес изображения для загрузки из запроса ДНС">
    -->
    <title>Домашнее задание 2</title>
    <!--
    <link rel="canonical" href="адрес канонической страницы">
    <link rel="shorturl" href="адрес короткого урла">
    -->
    <!--
    <link rel="index" href="адрес страницы родителя (не главной)">
    <link rel="prev" href="адрес предыдущей страницы">
    <link rel="next" href="адрес следующей страницы">
    -->
    <meta name="apple-mobile-web-app-title" content="Заголовок без SEO">
    <meta name="description" content="Описание страницы">
    <meta name="keywords" content="Ключевые слова для некоторых поисковиков">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <!-- иконти и фавиконы
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/touch-icon-ipad-retina.png">
    -->
    <link href="/styles/10.css" rel="stylesheet">
    <!--<script src="/scripts.js" defer></script>-->
    <script src="/vendor/public/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="/styles/flexslider/flexslider.css" type="text/css" media="screen"/>
</head>
<body>
<header>
    <div class="top">
        <a class="logo" href="/"><img src="/img/6/logo.png" alt="логотип"></a>

        <div class="dark">HAVE AN ACCOUNT? <a href="#">SIGN IN</a> OR <a href="#">SIGN UP</a></div>
    </div>
    <nav class="nav_top">
        <ul>
            <li class="level1">
                <div class="animate_menu"></div>
                <a href="#">HOME</a></li>
            <li class="hr_level2">
                <div class="animate_menu"></div>
                <a href="#">ABOUT <sup>&or;</sup></a>
                <ul class="level2">
                    <li><a href="#">HISTORY</a></li>
                    <li class="hr_level3"><a href="#">NEWS &gt;</a>
                        <ul class="level3">
                            <li><a href="#">HISTORY</a></li>
                            <li><a href="#">NEWS</a></li>
                        </ul>
                    </li>
                    <li><a href="#">TESTIMONIALS</a></li>
                </ul>
            </li>
            <li class="level1">
                <div class="animate_menu"></div>
                <a href="#">PRODUCTS</a></li>
            <li class="level1">
                <div class="animate_menu"></div>
                <a href="#">SERVICES</a></li>
            <li class="level1">
                <div class="animate_menu"></div>
                <a href="#">BLOG</a></li>
            <li class="level1">
                <div class="animate_menu"></div>
                <a href="#">CONTACTS</a></li>
        </ul>
    </nav>
    <div class="nav_mobile">
        <select name="menu">
            <option value="#" selected>HOME</option>
            <option value="#">ABOUT</option>
            <option value="#"> - HISTORY</option>
            <option value="#"> - NEWS</option>
            <option value="#"> - - LATEST</option>
            <option value="#"> - - ARCHIVE</option>
            <option value="#"> - TESTIMONIALS</option>
            <option value="#">PRODUCTS</option>
            <option value="#">SERVICES</option>
            <option value="#">BLOG</option>
            <option value="#">CONTACTS</option>
        </select>
    </div>
</header>
<main>
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="/img/6/slide.jpg" alt="">
            </li>
            <li>
                <img src="/img/6/slide-1.jpg" alt="">
            </li>
            <li>
                <img src="/img/6/slide-2.jpg" alt="">
            </li>
        </ul>
    </div>
    <div class="sect_1">
        <section class="info_3">
            <img src="/img/6/page-img.png" alt="кукуруза">

            <h2>New<br>
                Technologies</h2>

            <p>At vero eos et accusamus et iusto ssimos ducimus qui blanditiistes es praesentiumvoluptatum
                delenitimos.</p>
            <a class="button" href="#">MORE</a>
        </section>
        <section class="info_3">
            <img src="/img/6/page-img-1.png" alt="огурцы">

            <h2>Frost<br>
                protection</h2>

            <p>At vero eos et accusamus et iusto ssimos ducimus qui blanditiistes es praesentiumvoluptatum
                delenitimos.</p>
            <a class="button" href="#">MORE</a>
        </section>
        <section class="info_3">
            <img src="/img/6/page-img-2.png" alt="редиска">

            <h2>eco<br>
                solutions</h2>

            <p>At vero eos et accusamus et iusto ssimos ducimus qui blanditiistes es praesentiumvoluptatum
                delenitimos.</p>
            <a class="button" href="#">MORE</a>
        </section>
    </div>

    <div class="line"></div>

    <section class="sect_2">
        <div class="info_3">
            <p class="h3_b">welcome!</p>
            <img src="/img/6/page-img-3.png" alt="Приветствие">

            <p>Ut vero eos et accusamus et iusto odio dignissimos ducimus qui voluptatum deleniti atque corrupti quos
                dolores et quasmolestias exceptu. </p>
            <a class="button" href="#">MORE</a>
        </div>
        <div class="info_3">
            <p class="h3_b">our mission</p>

            <p class="col_bg">lorem ipsum dolore massa as laoreet magna aliqua</p>

            <p class="dark">Ut vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent.</p>

            <p>Eluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                provident similique <a href="#">sunt in culpa qui</a> officia deserunt mollitia animi, id est laborum et
                dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                nobis est eligendi opticumque </p>
            <a class="button" href="#">MORE</a>
        </div>
        <div class="info_3">
            <div class="info_small">
                <div class="circle">01.</div>
                <h3 class="big">vegetable seeds</h3>
                <p>Lorem ipsum dolor sit ctetueradipiscing elit. Sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolorese
                    magna aiqu. </p>
            </div>

            <div class="info_small space">
                <div class="circle">02.</div>
                <h3 class="big">agricultural seeds</h3>
                <p>Lorem ipsum dolor sit ctetueradipiscing elit. Sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolorese
                    magna aiqu. </p>
            </div>
            <a class="button" href="#">MORE</a>
        </div>
    </section>
</main>
<footer>
    <div class="footer_info">
        <div class="info_3">
            <p>copyright</p>

            <div>&copy; 2013 | <a href="#">Privacy Policy</a></div>
        </div>
        <div class="info_3">
            <address>
                <p>address</p>

                <div>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</div>
            </address>
        </div>
        <div class="info_3 soc">
            <p>Follow Us</p>

            <div class="social">
                <a class="soc1" href="#"></a>
                <a class="soc2" href="#"></a>
                <a class="soc3" href="#"></a>
                <a class="soc4" href="#"></a>
            </div>
        </div>
    </div>
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