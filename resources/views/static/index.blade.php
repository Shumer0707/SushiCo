@extends('layout/main')

@section('title')
Главная страница
@endsection
@section('content')
<!-----------------------------------------------------------Промо------------------------------------------------------------------->
<a href="/delete"><button class="btn_basket">Удалить все<i class="fa-solid fa-basket-shopping"></i></button></a>
<div id="main">
    <div class="scroller">
            <div class="item item1">
                <img src="\img\for-fluter\header-1.jpg" alt="1">
            </div>
            <div class="item item2">
                <img src="\img\for-fluter\header-2.jpg" alt="2">
            </div>
            <div class="item item3">
                <img src="\img\for-fluter\header-3.jpg" alt="3">
            </div>
        <span class="btn prev">&lt;</span>
        <span class="btn next">&gt;</span>
    </div>
</div>
<!---------------------------------------------------------Коталог Акция-------------------------------------------------------------------------------------->
<div id="Акция"></div>
<h1>Лутшие цены на сеты, для вас и ваших друзей</h1>
<div class="Katalog_main one" id="Акция">
    <div class="Katalog_Skrol">
        @foreach($menu as $el)
        <div class="Katalog">
            <div class="Katalog_h2">
            <h2>{{$el->title}}</h2>
            </div>
            <div class="Katalog_Verh">
                <div class="photo">
                    <a href="menu/show/{{$el->id}}"><img src="/img/menu/{{$el->img}}" alt="Акция" class="cover"></a>
                </div>
            </div>
            <div class="Katalog_Center">
                <p>{{$el->gram}}</p>
                <p>{{$el->ingr_1}}</p><p>{{$el->ingr_2}}</p><p>{{$el->ingr_3}}</p><p>{{$el->ingr_4}}</p><p>{{$el->ingr_5}}</p>
            </div>
            <div class="Katalog_Niz">
                <div class="Katalog_Niz_Container"><span>{{$el->price + ($el->price / 10)}}</span>{{$el->price}} MDL</div>
                <div class="Katalog_Niz_Container">
                    <a href="basket/{{$el->id}}/edit"><button class="btn_basket">Добавить <i class="fa-solid fa-basket-shopping"></i></button></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <span class="btn_kotal prev">&lt;</span>
    <span class="btn_kotal next">&gt;</span>
</div>
<!---------------------------------------------------------Info-------------------------------------------------------------------------------------->
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
    <div class="info left" >
        <div class="info_h">
            <h2>О команде.
                <br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto aspernatur autem culpa, cum doloribus ex inventore possimus quasi quis ullam!
            </h2>
        </div>
    </div>
    <div class="info right"><img src="img\info\man-1.jpg" alt="1"></div>
</div>
@endsection


