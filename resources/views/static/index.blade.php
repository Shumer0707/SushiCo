@extends('layout/main')

@section('title')
Главная страница
@endsection
@section('content')
<div class="main_promo">
    <div class="swiper Swiper_promo">
        <div class="swiper-wrapper">
            <div class="swiper-slide item_promo">
                <img src="\img\for-fluter\header-1.jpg" alt="1">
            </div>
            <div class="swiper-slide item_promo">
                <img src="\img\for-fluter\header-2.jpg" alt="2">
            </div>
            <div class="swiper-slide item_promo">
                <img src="\img\for-fluter\header-3.jpg" alt="3">
            </div>
        </div>
    </div>
</div>
<div class="info_main">
<h1>{{__('home.h1')}}</h1>
<div class="Catalog_main" id="Акция">
    @isset($menu)
    <div class="swiper Swiper_menu">
        <div class="swiper-wrapper">
            @foreach($menu as $el)
            <div class="swiper-slide">
                <div id="catalog" class="Catalog">
                    <div class="Catalog_h2">
                    <h2>{{$el->title}}</h2>
                    </div>
                    <div class="Catalog_Verh">
                        <div class="photo">
                            <a href="menu/show/{{$el->id}}"><img src={{asset("storage/$el->img")}} alt="Акция" class="cover"></a>
                        </div>
                    </div>
                    <div class="Catalog_Center">
                        <p class="weight_menu">{{$el->gram}} {{__('menu.gram')}}</p>
                        @if(app()->getLocale() == 'ru')
                            <p>{{$el->description_ru}}</p>
                        @elseif(app()->getLocale() == 'ro')
                            <p>{{$el->description_ro}}</p>   
                        @endif
                    </div>
                    <div class="Catalog_Niz">
                        <div class="Catalog_Niz_Container"><span>{{$el->price + ($el->price / 10)}}</span>{{$el->price}} MDL</div>
                        <div id="catalog_niz_right_{{$el->id}}" class="Catalog_Niz_right">
                            @if(isset($_SESSION['prod'][$el->id]))
                            <div class="basket_count menu">
                                <button id="count_btn" class="basket_count_btn menu" value="{{$el->id}}" name="minus">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <div class="basket_count_result">
                                    <span id="basket_count_result_{{$el->id}}">
                                        {{$_SESSION['prod'][$el->id]}}
                                    </span>
                                </div>
                                <button id="count_btn" class="basket_count_btn menu" value="{{$el->id}}" name="plus">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                            @else
                                <button id="add_btn" class="btn_basket" value="{{$el->id}}" name="plus">
                                    {{__('menu.add')}} <i class="fa-solid fa-basket-shopping"></i>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    @endisset
</div>
@include('section_index.menu');
@endsection


