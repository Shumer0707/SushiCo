<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div class="wrapper" id="wrapper">
        <header class="header" id="header">
            {{-- <div class="header_container"> --}}
            <div class="header_logo"><img src="/img/Logo1.jpg" alt="Sushico Логотип"></div>
            <div class="header_phone">
                <div class="header_phone_nomer">
                    <span class="header_phone_nomer_text" href="" target="_blank">060000000</span>
                    <span class="header_phone_nomer_text" href="" target="_blank">070000000</span>
                </div>
                <div class="header_phone_dostavka">с 10:00 до 22:00 Доставка занимает в среднем 40 минут.</div>
            </div>
            <div class="header_lang">
                <a href="{{route('basket.index')}}"><button class="button basket"><i class="fa-solid fa-basket-shopping"></i></button></a>
                <a href="{{route('contact.index')}}"><button class="button contacti"><p>Контакты</p></button></a>
                <a href="{{route('promo.index')}}"><button class="button home"><p>Главная</p></button></a>
            </div>
        </header>
        <!--блок меню-->
        <div class="header_menu_sticky">
            <div class="header_menu_container">
                <div class="header_menu_logo"><img src="/img/Logo1.jpg" alt="Sushico Логотип"></div>
                <div class="header_menu">
                    <div class="header_menu_icon">
                        <span></span>
                    </div>
                    <nav class="header_menu_body" id="header_menu_body">
                        <ul class="header_menu_list">
                            <li><a href="/menu/set">Сеты</a></li>
                            <li><a href="/menu/set">Нигири</a></li>
                            <li><a href="/menu/set">Гункан</a></li>
                            <li><a href="/menu/set">Хосомаки</a></li>
                            <li><a href="/menu/set">Уромаки</a></li>
                            <li><a href="/menu/set">Темпура</a></li>
                            <li><a href="/menu/set">Сашими</a></li>
                            <li><a href="/menu/set">Суномон</a></li>
                            <li><a href="/menu/set">Лапша</a></li>
                            <li><a href="/menu/set">Рис</a></li>
                            <li><a href="/menu/set">Супы</a></li>
                            <li><a href="/menu/set">Напити</a></li>
                        </ul>
                    </nav>
                </div>

                    {{-- <a href="/#Акция"><button class="button_menu">Акция</button></a>
                    <a href="/menu/set"><button class="button_menu">Сеты</button></a>
                    <a href="#Акция"><button class="button_menu">Нигири</button></a>
                    <a href="#Акция"><button class="button_menu">Гункан</button></a>
                    <a href="#Акция"><button class="button_menu">Хосомаки</button></a>
                    <a href="#Акция"><button class="button_menu">Уромаки</button></a>
                    <a href="#Акция"><button class="button_menu">Темпура</button></a>
                    <a href="/menu/Sashimi"><button class="button_menu">Сашими</button></a>
                    <a href="#Акция"><button class="button_menu">Суномон</button></a>
                    <a href="#Акция"><button class="button_menu">Лапша</button></a>
                    <a href="#Акция"><button class="button_menu">Рис</button></a>
                    <a href="#Акция"><button class="button_menu">Супы</button></a>
                    <a href="#Акция"><button class="button_menu">Напити</button></a> --}}
            </div>
        </div>
        <main class="main">
            @yield('content')
        </main>
        <a href="#header" class="up_a" id="up_a"><div class="up_button" id="up_button" onscroll="myFunk()"><i class="fa-solid fa-arrow-up"></i></div></a>
        <footer class="footer">
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
                    <a href="/">Главная</a>
                    <a href="/contact">Контакты</a>
                    <a href="/agreement">Условия использования</a>
                </nav>
            </div>
            <p>© 2023 sushico.md - Все права защищены</p>
        </footer>
    </div>
<script src="/js/app.js"></script>
<script src="https://kit.fontawesome.com/ec45053718.js" crossorigin="anonymous"></script>
</body>
</html>

