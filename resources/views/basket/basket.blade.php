@extends('layout/main')

@section('title')
    Корзина
@endsection
@section('content')
    <h1>Корзина</h1>
    @if(isset($_SESSION['count']))
        @foreach($_SESSION['count'] as $el => $val)
            {{print_r($_SESSION['count'][2])}}
            <h1>{{$val['count']}}</h1>
        @endforeach
    @endif
    <div class="container_basket menu">
        <div class="basket_catalog">
            <div class="basket_catalog_product">Товар</div>
            <div class="basket_catalog_info">Количество</div>
            <div class="basket_catalog_info">Цена</div>
            <div class="basket_catalog_info">Итого</div>
            <div class="basket_catalog_info">Удалить</div>
        </div>
        @if(isset($_SESSION['prod']))
        {{print_r($basket)}}<br/><br/>
            @foreach($basket as $el => $val)
{{--                {{$val->title}}--}}
{{--                <div class="basket_catalog menu">--}}
{{--                    <div class="basket_catalog_product">--}}
{{--                        <div class="basket_catalog_producti img"><img src="/img/menu/{{$val->img}}" alt="{{$val->id}}"></div>--}}
{{--                        <div class="basket_catalog_producti">{{$val->title}}</div>--}}
{{--                    </div>--}}
{{--                    <div class="basket_catalog_info">{{$val->title}}</div>--}}
{{--                    <div class="basket_catalog_info">{{$val->price}}</div>--}}
{{--                    <div class="basket_catalog_info">{{$val->price}}</div>--}}
{{--                    <div class="basket_catalog_info"></div>--}}
{{--                </div>--}}
            @endforeach
        @endif
    </div>

    <a href="/delete"><button class="btn_basket">Удалить все<i class="fa-solid fa-basket-shopping"></i></button></a>
@endsection
