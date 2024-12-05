<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script async src="/js/start.js"></script>
</head>
<body class="">
    <div class="wrapper" id="wrapper">
        <header class="header" id="header">
            <div class="header_logo"><a href="{{route('promo.index')}}"><img src="/img/Logo1.jpg" alt="Sushico Логотип"></a></div>
            <div class="header_phone">
                <div class="header_phone_nomer">
                    <span class="header_phone_nomer_text" href="" target="_blank">060000000</span>
                    <span class="header_phone_nomer_text" href="" target="_blank">070000000</span>
                </div>
                <div class="header_phone_dostavka">{{__('header.time_delivery')}}</div>
            </div>
            <div class="header_lang">
                <a href="{{route('basket.index')}}">
                    <button class="button basket">
                    <div class="icon_container">
                        {{-- <div class="mini_test">1</div> --}}
                        <i class="fa-solid fa-basket-shopping"></i>
                    </div>
                        <div id="all_price_wrapper" class="all_price_wrapper">
                            @if(isset($_SESSION['count'], $_SESSION['all_price']))
                                <span class="all_price">{{$_SESSION['all_price']}}.0 MDL</span>
                            @else
                                <span class="all_price">00.0 MDL</span>
                            @endif
                        </div>
                    </button>
                </a>
                <a href="{{route('contact.index')}}"><button class="button contacti">{{__('header.contacts')}}</button></a>
                <a href="{{route('promo.index')}}"><button class="button home">{{__('header.home')}}</button></a>
            </div>
        </header>
        <!--блок меню-->
        <div class="header_menu_sticky">
            <div class="wrapper_lang">@include('section.lang')</div>
            <div class="header_menu_container">
                <div class="header_menu_logo"><a href="{{route('promo.index')}}"><img src="/img/Logo1.jpg" alt="Sushico Логотип"></a></div>
                <div class="header_menu">
                    <div class="header_menu_icon">
                        <span></span>
                    </div>
                    <nav class="header_menu_body" id="header_menu_body">
                        <ul class="header_menu_list">
                            <a href="/#set"><li>{{__('header.set')}}</li></a>
                            <a href="/#uramaki"><li>{{__('header.uramaki')}}</li></a>
                            <a href="/#hosomaki"><li>{{__('header.hosomaki')}}</li></a>
                            <a href="/#tempura"><li>{{__('header.tempura')}}</li></a>
                            <a href="/#nigiri"><li>{{__('header.nigiri')}}</li></a>
                            <a href="/#gunkane"><li>{{__('header.guncan')}}</li></a>
                            <a href="/#sashimi"><li>{{__('header.sashimi')}}</li></a>
                            <a href="/#wakame"><li>{{__('header.sunomon')}}</li></a>
                            <a href="/#noodles"><li>{{__('header.lapsha')}}</li></a>
                            <a href="/#rice"><li>{{__('header.ris')}}</li></a>
                            <a href="/#sup"><li>{{__('header.sup')}}</li></a>
                            <a href="/#drink"><li>{{__('header.napitki')}}</li></a>
                        </ul>
                        <ul class="header_menu_list right">
                            <a href="{{route('promo.index')}}"><li>{{__('header.home')}}</li></a>
                            <a href="{{route('contact.index')}}"><li>{{__('header.contacts')}}</li></a>
                            <li>@include('section.lang')</li>
                        </ul>
                        <div class="burger_lang"></div>
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
                        <h2>{{__('footer.address')}}</h2>
                        <h2>{{__('footer.program')}}</h2>
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
                    <a href="/">{{__('footer.home')}}</a>
                    <a href="/contact">{{__('footer.contacts')}}</a>
                    <a href="/agreement">{{__('footer.terms_of_use')}}</a>
                </nav>
            </div>
            <p>© 2023 sushico.md - {{__('footer.protect')}}</p>
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

