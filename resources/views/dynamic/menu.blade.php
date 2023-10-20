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
                        <div class="Katalog_h2">
                            <h2>{{$el->title}}</h2>
                        </div>
                        <div class="Katalog_Verh"><a href="/menu/show/{{$el->id}}"><img src="/img/menu/{{$el->img}}" alt="Кортинка меню" class="cover"></a></div>
                        <div class="Katalog_Center">
                            <p>{{$el->gram}}</p>
                            <p>{{$el->ingr_1}}</p><p>{{$el->ingr_2}}</p><p>{{$el->ingr_3}}</p><p>{{$el->ingr_4}}</p><p>{{$el->ingr_5}}</p>
                        </div>
                        <div class="Katalog_Niz">
                            <div class="Katalog_Niz_Container">{{$el->price}} MDL</div>
                            <div class="Katalog_Niz_Container">
                                    <form method="POST" action="/basket/store">@csrf
                                        <input type="hidden" name="id" value="{{$el->id}}">
                                        <button class="btn_basket">Добавить <i class="fa-solid fa-basket-shopping"></i></button>
                                    </form>
{{--                                <a href="/basket/store"/><button class="btn_basket">Добавить <i class="fa-solid fa-basket-shopping"></i></button></a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
    </div>
@endsection
