@extends('layout/main')

@section('title')
    Меню
@endsection
@section('content')
    <!--Коталог Акция------------------------------------------------------------------------------------------>
    <h1>Меню : {{$category}}</h1>
        <div class="container menu">
            @if($menu != '')
                @foreach($menu as $el)
                    <div class="Katalog_menu" id="{{$el->id}}">
                        <h2>{{$el->title}}</h2>
                        <div class="Katalog_Verh"><a href="/menu/show/{{$el->id}}"><img src="/img/menu/{{$el->img}}" alt="Кортинка меню" class="cover"></a></div>
                        <div class="Katalog_Center">
                            <p>{{$el->gram}}</p>
                            <p>{{$el->ingr_1}}</p><p>{{$el->ingr_2}}</p><p>{{$el->ingr_3}}</p><p>{{$el->ingr_4}}</p><p>{{$el->ingr_5}}</p>
                        </div>
                        <div class="Katalog_Niz">
                            <div class="Katalog_Niz_Container"><span>{{$el->price + ($el->price / 10)}}</span>{{$el->price}} MDL</div>
                            <div class="Katalog_Niz_Container">
                                <a href="/basket"><button class="btn_basket">Добавить <i class="fa-solid fa-basket-shopping"></i></button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
    </div>
@endsection
