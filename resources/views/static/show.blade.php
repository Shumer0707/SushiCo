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
                <div class="Catalog_Verh show"><img src={{asset("storage/$el->img")}} alt="{{$el->title}}" class="cover"></div>
                <div class="Catalog_Center show">
                    <div class="Container_Catalog_Center show">
                        <p>{{$el->gram}}</p>
                        @foreach ($el->ingr()->orderBy('text_ru', 'asc')->get() as $ingr)
                            @if(app()->getLocale() == 'ru')
                                <p>{{$ingr->text_ru}}</p>
                            @elseif(app()->getLocale() == 'ro')
                                <p>{{$ingr->text_ro}}</p>   
                            @endif
                        @endforeach
        {{-- <p>{{$el->ingr_1}}</p><p>{{$el->ingr_2}}</p><p>{{$el->ingr_3}}</p><p>{{$el->ingr_4}}</p><p>{{$el->ingr_5}}</p><p></p> --}}
                    </div>
                </div>
                <div class="Catalog_Niz show">
                    <div class="Catalog_Niz_Container show">
                        <div class="Catalog_Niz_right show">
                            <a href="/menu/{{$el->category}}/#{{$el->id}}"><button class="btn_basket show beck">Назад</button></a>
                        </div>
                        <div class="price show">{{$el->price}}.0 MDL</div>
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
