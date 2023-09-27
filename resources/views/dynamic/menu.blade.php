@extends('layout/main')

@section('title')
    Меню
@endsection
@section('content')
    <!--Коталог Акция------------------------------------------------------------------------------------------>
    <h1>Меню</h1>
        <div class="container menu">
            @foreach($menu as $el)
                <div class="Katalog_menu">
                    <h2>{{$el->title}}</h2>
                    <div class="Katalog_Verh"><img src="/img/menu/{{$el->img}}" alt="Кортинка меню" class="cover"></div>
                    <div class="Katalog_Center"></div>
                    <div class="Katalog_Niz"><h3>{{$el->price}}</h3></div>
                </div>
            @endforeach
    </div>
@endsection
