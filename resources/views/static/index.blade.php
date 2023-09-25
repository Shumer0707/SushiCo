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
            <div class="Katalog_Verh"><img src="/img/menu/{{$el->img}}" alt="Акция" class="cover"></div>
            <div class="Katalog_Center"></div>
            <div class="Katalog_Niz">
                <h3>{{$el->price}}</h3>
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
<div id="footer">Футер</div>
{{--<div class="popup">--}}
{{--    <div class="popup_body">--}}
{{--        <div class="popup_content">--}}
{{--            <a href="" class="popup_close"></a>--}}
{{--            <div class="popup_title">Модальное окно №1</div>--}}
{{--            <div class="popup_text">lorem11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection


