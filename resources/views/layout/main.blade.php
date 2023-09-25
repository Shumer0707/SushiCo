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
    <div class="menu">
        <ul class="menu_ul">
            <li href="#sale"><a href="#Акция">Акция</a></li>
            <li><a href="#Акция">Сеты</a></li>
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
<script src="/js/home.js"></script>
</body>
</html>

