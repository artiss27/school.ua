<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Домашнее задание 2</title>
    <meta name="keywords" content="проверка, домашка">
    <meta name="description" content="Проверка домашней работы">
    <link href="/styles/6.css" rel="stylesheet" type="text/css" media="screen">
    <style>
        @font-face {
            font-family: Anton; /* Гарнитура шрифта */
            src: url(/styles/fonts/Anton.ttf); /* Путь к файлу со шрифтом  */
        }
    </style>
</head>
<body>
<div class="main">
    <div class="header content">
        <div class="top">
            <a class="logo" href="/"><img src="/img/6/logo.png" alt="логотип"></a>

            <div class="dark">HAVE AN ACCOUNT? <a href="#">SIGN IN</a> OR <a href="#">SIGN UP</a></div>
        </div>
        <div class="navigation">
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
        </div>
        <div class="m_navigation">
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
    </div>

    <div class="content">
        <div class="banner">
            <img src="/img/6/central.jpg" alt="слайдер">
        </div>
    </div>

    <div class="footer">

    </div>
</div>


<!--
<div class="main">
  <table class="header content">
    <tr>
      <th><a href="/"><img src="/img/6/logo.png" alt="логотип"></a></th>
      <td class="dark">HAVE AN ACCOUNT? <a href="#">SIGN IN</a> OR <a href="#">SIGN UP</a></td>
    </tr>
  </table>
  <table class="navigation content">
    <tr>
      <td><a href="#">HOME</a></td>
      <td><a href="#">ABOUT</a></td>
      <td><a href="#">PRODUCTS</a></td>
      <td><a href="#">SERVICES</a></td>
      <td><a href="#">BLOG</a></td>
      <td><a href="#">CONTACTS</a></td>
    </tr>
  </table>
  <table class="banner content">
    <tr>
      <td><img src="/img/6/central.jpg" alt="слайдер"></td>
    </tr>
  </table>
  <table class="section content">
    <tr>
      <td><img src="/img/6/page-img.png" alt="кукуруза" class="round">
        <h2>New<br>
          Technologies</h2>
        <p>At vero eos et accusamus et iusto ssimos ducimus qui blanditiistes es praesentiumvoluptatum delenitimos.</p>
      <td><img src="/img/6/page-img-1.png" alt="огурцы" class="round">
        <h2>Frost<br>
          protection</h2>
        <p>At vero eos et accusamus et iusto ssimos ducimus qui blanditiistes es praesentiumvoluptatum delenitimos.</p>
      <td><img src="/img/6/page-img-2.png" alt="редиска" class="round">
        <h2>eco<br>
          solutions</h2>
        <p>At vero eos et accusamus et iusto ssimos ducimus qui blanditiistes es praesentiumvoluptatum delenitimos.</p>
    </tr>
    <tr>
      <td><a href="#"><span class="button"></span></a></td>
      <td><a href="#"><span class="button"></span></a></td>
      <td><a href="#"><span class="button"></span></a></td>
    </tr>
  </table>
  <table class="line content">
  </table>


  <table class="info content">
    <tr>
      <td class="col"><p class="h3_b">welcome!</p>
        <img src="/img/6/page-img-3.png" alt="Приветствие">
        <p>Ut vero eos et accusamus et iusto odio dignissimos ducimus qui voluptatum deleniti atque corrupti quos dolores et quasmolestias exceptu. </p></td>
      <td class="col"><p class="h3_b">our mission</p>
        <p class="col_bg">lorem ipsum dolore massa as laoreet magna aliqua</p>
        <p class="dark">Ut vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent.</p>
        <p>Eluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique <a href="#">sunt in culpa qui</a> officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi opticumque </p></td>
      <td class="col"><table class="info_small">
          <tr>
            <td class="circle">01.</td>
            <td class="big">vegetable seeds</td>
          </tr>
        </table>
        <p>Lorem ipsum dolor sit ctetueradipiscing elit. Sed diam nonummy nibh euismod tincidunt ut laoreet dolorese magna aiqu. </p>
        <table class="info_small">
          <tr>
            <td class="circle">02.</td>
            <td class="big">agricultural seeds</td>
          </tr>
        </table>
        <p>Lorem ipsum dolor sit ctetueradipiscing elit. Sed diam nonummy nibh euismod tincidunt ut laoreet dolorese magna aiqu. </p></td>
    </tr>
    <tr>
      <td><a href="#"><span class="button"></span></a></td>
      <td><a href="#"><span class="button"></span></a></td>
      <td><a href="#"><span class="button"></span></a></td>
    </tr>
  </table>
    <table class="footer_info content">
          <tr>
            <td><p>copyright</p>
              <span>&copy 2013  | <a href="#">Privacy Policy</a></span></td>
            <td><p>address</p>
              <span>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</span></td>
            <td><p>Follow Us</p>
              <span>&nbsp;</span></td>
          </tr>
    </table>
</div>
-->
</body>
</html>