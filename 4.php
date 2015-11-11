<?php
error_reporting(-1);
ini_set('display_errors', 1);
header('Content-Type: text/html; charset=utf-8');
//session_start();
?>
<html>
<header>
</header>
<body>
<!--div.header>ul>li*5 далее ажимаем TAB-->
<div class="auth">
    <form action="" method="post"><br>
        <table>
            <tr>
                <td>Логин</td>
                <td><input type="text" name="login" placeholder="Введите логин"></td>
                <td></td>
            </tr>
            <tr>
                <td>Пароль</td>
                <td><input type="password" name="pass" placeholder="Введите пароль"></td>
                <td></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="email" name="email" placeholder="Введите E-mail"></td>
                <td></td>
            </tr>
            <tr>
                <td>Возраст</td>
                <td><input type="number" name="age" placeholder="Введите Ваш возраст"></td>
                <td></td>
            </tr>
            <tr>
                <td><a href="#">Авторизоваться</a></td>
                <td><input class="button" type="submit" name="submit" value="Зарегистрироваться"></td>
                <td></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>