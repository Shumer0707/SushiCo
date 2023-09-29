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
    <div class="header_logo"><img src="/img/Logo1.jpg" alt="Sushico Логотип"></div>
    <div class="header_phone">
        <div class="header_phone_nomer">
            <span class="header_phone_nomer_text" href="" target="_blank">060000000</span>
            <span class="header_phone_nomer_text" href="" target="_blank">070000000</span>
        </div>
        <div class="header_phone_dostavka">с 10:00 до 22:00 Доставка занимает в среднем 40 минут.</div>
    </div>
    <div class="header_lang">
        <a href="/"><button class="button home"><p>Главная</p></button></a>
        <a href="/contact"><button class="button contacti"><p>Контакты</p></button></a>
        <a href="/basket"><button class="button basket"><i class="fa-solid fa-basket-shopping"></i></button></a>
    </div>
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
<div class="footer">
    <div class="footer_promo">
        <div class="footer_content"><img src="/img/Logo1.jpg" alt="Sushico Логотип"></div>
        <div class="footer_content"><img src="/img/kat_1.jpg" alt="Sushico Логотип"></div>
        <div class="footer_content right">
            <div class="container_flex">
                <h2>STRADA ISMAIL 86, CHIȘINĂU</h2>
                <h2>PROGRAM: 11:00 — 22:00</h2>
                <h2>078 125 533</h2>
                <h2>WWW.SUSHIKO.MD</h2>
                <div class="social_icons">
                    <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.telegram.org" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                    <a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_menu">
        <nav>
            <a href="'/'">Главнвя</a>
            <a href="/contact">Контакты</a>
            <a href="/agreement">Условия использования</a>
        </nav>
    </div>
    <p>© 2023 sushico.md - Все права защищены</p>
</div>
<script src="/js/home.js"></script>
<script src="https://kit.fontawesome.com/ec45053718.js" crossorigin="anonymous"></script>
</body>
</html>

