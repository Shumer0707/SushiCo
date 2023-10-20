@extends('layout/main')

@section('title')
    Меню
@endsection
@section('content')
    <!--Коталог Акция------------------------------------------------------------------------------------------>
    <div class="container menu show">
        @if($menu != '')
            @foreach($menu as $el)
                <div class="Katalog_menu show">
                    <div class="Katalog_h2 show">
                        <h2>{{$el->title}}</h2>
                    </div>
                    <div class="Katalog_Verh show"><img src="/img/menu/{{$el->img}}" alt="Кортинка меню" class="cover"></div>
                    <div class="Katalog_Center show">
                        <div class="container_Katalog_Center show">
                        <p>{{$el->gram}}</p>
                        <p>{{$el->ingr_1}}</p><p>{{$el->ingr_2}}</p><p>{{$el->ingr_3}}</p><p>{{$el->ingr_4}}</p><p>{{$el->ingr_5}}</p>
                        </div>
                    </div>
                    <div class="Katalog_Niz show ">
                        <div class="Katalog_Niz_Container show">
                            <a href="/menu/{{$el->category}}/#{{$el->id}}"><button class="btn_basket show beck">Назад</button></a>
                            <div class="Katalog_Niz price show">{{$el->price}} MDL</div>
                            <a href="/basket"><button class="btn_basket show">Добавить <i class="fa-solid fa-basket-shopping"></i></button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
