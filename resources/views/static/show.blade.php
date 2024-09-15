@extends('layout/main')

@section('title')
    Меню
@endsection
@section('content')
    <!--Коталог Акция------------------------------------------------------------------------------------------>
    @if($menu != '')
        @foreach($menu as $el)
            <div class="Catalog_menu show">
                <div class="Catalog_h2 show">
                    <h2>{{$el->title}}</h2>
                </div>
                <div class="Catalog_Verh show"><img src="/img/menu/{{$el->img}}" alt="Кортинка меню" class="cover"></div>
                <div class="Catalog_Center show">
                    <div class="Container_Catalog_Center show">
                    <p>{{$el->gram}}</p>
                    <p>{{$el->ingr_1}}</p><p>{{$el->ingr_2}}</p><p>{{$el->ingr_3}}</p><p>{{$el->ingr_4}}</p><p>{{$el->ingr_5}}</p>
                    </div>
                </div>
                <div class="Catalog_Niz show ">
                    <div class="Catalog_Niz_Container show">
                        <div class="Catalog_Niz_right show">
                            <a href="/menu/{{$el->category}}/#{{$el->id}}"><button class="btn_basket show beck">Назад</button></a>
                        </div>
                        <div class="price show">{{$el->price}} MDL</div>
                        <div class="Catalog_Niz_right show">
                            <a href={{route('basket.add_to_basket', $el->id)}}>
                                <button class="btn_basket">Добавить <i class="fa-solid fa-basket-shopping"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
