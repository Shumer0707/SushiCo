@extends('layout/main')

@section('title')
Главнвя страница
@endsection
@section('content')
<!--Промо-->
<div id="main">
    <div class="scroller">
            <div class="item item1">
                <img src="img\for-fluter\header-1.jpg" alt="1">
            </div>
            <div class="item item2">
                <img src="img\for-fluter\header-2.jpg" alt="2">
            </div>
            <div class="item item3">
                <img src="img\for-fluter\header-3.jpg" alt="3">
            </div>
        <span class="btn prev">&lt;</span>
        <span class="btn next">&gt;</span>
    </div>
</div>
<!--Коталог Акция--------------------------------------------------------------------------------------------------------------------------------------------->
<h1>Акция</h1>
<div class="Katalog_main one" >
    <a class="href" name="Акция"></a>
    <div class="Katalog_Skrol">
        @foreach($menu as $el)
        <div class="Katalog">
            <h2>{{$el->title}}</h2>
            <div class="Katalog_Verh">
                <div class="photo">
                    <img src="/img/menu/{{$el->img}}" alt="Акция" class="cover">
                </div>
            </div>
            <div class="Katalog_Center">
                <p>{{$el->gram}}</p></br>
                <p>{{$el->ingr_1}}</p><p>{{$el->ingr_2}}</p><p>{{$el->ingr_3}}</p><p>{{$el->ingr_4}}</p><p>{{$el->ingr_5}}</p>
            </div>
            <div class="Katalog_Niz">
                <div class="Katalog_Niz_Container"><span>{{$el->price + ($el->price / 10)}}</span>{{$el->price}} MDL</div>
                <div class="Katalog_Niz_Container">
                    <a href="/basket"><button class="btn_basket">Добавить <i class="fa-solid fa-basket-shopping"></i></button></a>
                </div>
{{--                <h3>{{$el->price}} <button><i class="fa-solid fa-basket-shopping"></i></button></h3>--}}
            </div>
        </div>
        @endforeach
    </div>
    <span class="btn_kotal prev">&lt;</span>
    <span class="btn_kotal next">&gt;</span>
</div>
<div class="info_main">
    <div class="info left"><img src="img\info\rolli-1.jpg" alt="1"></div>
    <div class="info right">
        <div class="info_h">
            <h2>Изысканные роллы.
            <br/>Приготовленные из продуктов высочайшего качества.
            <br/>Мы рады угостить вас как класическими рецептами, так и необычными сочетаниями вкусов,способных удовлетворить самых изыскательных гостей.
            </h2>
        </div>
    </div>
    <div class="info left">
        <div class="info_h">
            <h2>О команде.
                <br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto aspernatur autem culpa, cum doloribus ex inventore possimus quasi quis ullam!
            </h2>
        </div>
    </div>
    <div class="info right"><img src="img\info\man-1.jpg" alt="1"></div>
</div>
<div class="info_main cont">
    <div class="info left cont">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1143.7031202858898!2d28.84809011848656!3d47.
        0166834999669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c3c51491f6f%3A0x5c3409216cc457fa!2sSushiko
        !5e0!3m2!1sru!2s!4v1695807615443!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen=""
        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="info right cont">
        <div class="contact">
            <h1>Контакты</h1>
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
@endsection


