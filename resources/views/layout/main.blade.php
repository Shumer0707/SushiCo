<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
<!--Шапка-->
<div id="header">
    <div class="header_logo"><img src="/img/Logo1.jpg" alt="Sushico Суши Логотип"></div>
    <div class="header_phone">
        <div class="header_phone_nomer">
            <span class="header_phone_nomer_text" href="" target="_blank">060000000</span>
            <span class="header_phone_nomer_text" href="" target="_blank">070000000</span>
        </div>
        <div class="header_phone_dostavka">с 10:00 до 22:00 Доставка занимает в среднем 40 минут.</div>
    </div>
    <div class="header_lang">Смена языка</div>
</div>
<!--блок меню-->
<div class="container_sticky">
    <div class="header_menu">
        <ul class="header_menu_ul">
            <li><a href="/">Акция</a></li>
            <li><a href="/menu">Сеты</a></li>
            <li><a href="#Акция">Нигири</a></li>
            <li><a href="#Акция">Гункан</a></li>
            <li><a href="#Акция">Хосомаки</a></li>
            <li><a href="#Акция">Уромаки</a></li>
            <li><a href="#Акция">Темпура</a></li>
            <li><a href="#Акция">Сашими</a></li>
            <li><a href="#Акция">Суномон</a></li>
            <li><a href="#Акция">Лапша</a></li>
            <li><a href="#Акция">Рис</a></li>
            <li><a href="#Акция">Супы</a></li>
            <li><a href="#Акция">Напити</a></li>
        </ul>
    </div>
</div>
@yield('content')
<div id="footer">Футер</div>
<script src="/js/home.js"></script>
<script src="https://kit.fontawesome.com/ec45053718.js" crossorigin="anonymous"></script>
</body>
</html>

