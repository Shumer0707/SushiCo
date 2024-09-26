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
            <div class="header_logo"><img src="/img/Logo1.jpg" alt="Sushico Логотип"></div>
            <div class="header_phone">
                <div class="header_phone_nomer">
                    <span class="header_phone_nomer_text" href="" target="_blank">060000000</span>
                    <span class="header_phone_nomer_text" href="" target="_blank">070000000</span>
                </div>
                <div class="header_phone_dostavka">с 10:00 до 22:00 Доставка занимает в среднем 40 минут.</div>
            </div>
            <div class="header_lang">
                <a href="{{route('basket.index')}}">
                    <button class="button basket">
                    <div class="icon_container"><i class="fa-solid fa-basket-shopping"></i></div>
                        <div id="all_price_wrapper" class="all_price_wrapper">
                            @if(isset($_SESSION['count'], $_SESSION['all_price']))
                                <span class="all_price">{{$_SESSION['all_price']}}.0 MDL</span>
                            @else
                                <span class="all_price">00.0 MDL</span>
                            @endif
                        </div>
                    </button>   
                </a>
                <a href="{{route('contact.index')}}"><button class="button contacti">Контакты</button></a>
                <a href="{{route('promo.index')}}"><button class="button home">{{__('mess.home')}}</button></a>
            </div>
        </header>
        <!--блок меню-->
        <div class="header_menu_sticky">
            @include('section.lang')
            <div class="header_menu_container">
                <div class="header_menu_logo"><img src="/img/Logo1.jpg" alt="Sushico Логотип"></div>
                <div class="header_menu">
                    <div class="header_menu_icon">
                        <span></span>
                    </div>
                    <nav class="header_menu_body" id="header_menu_body">
                        <ul class="header_menu_list">
                            <a href="/menu/set"><li>Сеты</li></a>
                            <a href="/menu/set"><li>Нигири</li></a>
                            <a href="/menu/set"><li>Гункан</li></a>
                            <a href="/menu/set"><li>Хосомаки</li></a>
                            <a href="/menu/set"><li>Уромаки</li></a>
                            <a href="/menu/set"><li>Темпура</li></a>
                            <a href="/menu/set"><li>Сашими</li></a>
                            <a href="/menu/set"><li>Суномон</li></a>
                            <a href="/menu/set"><li>Лапша</li></a>
                            <a href="/menu/set"><li>Рис</li></a>
                            <a href="/menu/set"><li>Супы</li></a>
                            <a href="/menu/set"><li>Напити</li></a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <main class="main">
            @yield('content')
        </main>
        @include('section.mini_basket')
        <div id="block" class="block display_none"></div>
        <footer class="footer">
            <div class="footer_promo">
                <div class="footer_content left"><img src="/img/Logo1.jpg" alt="Sushico Логотип"></div>
                <div class="footer_content centr"><img src="/img/kat_1.jpg" alt="Sushico Логотип"></div>
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
        <div id="all_style">
            @isset($_SESSION['count'])
                <style>
                    .icon_container .fa-solid::after, .mini_basket_batton_icon .fa-solid::after{
                        content:"{{$_SESSION['count']}}";
                    }
                </style>
            @endisset
        </div>
    </div>
    <script async src="/js/app.js"></script>
    <script src="https://kit.fontawesome.com/ec45053718.js" crossorigin="anonymous"></script>
</body>
</html>

