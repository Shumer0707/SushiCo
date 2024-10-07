@extends('layout/main')

@section('title')
    {{__('header.basket')}}
@endsection
@section('content')  
    <div id="wraper_basket">
        <div class="basket_form_popup">
            @include('section_basket.form_basket')
        </div>
        @if(!isset($_SESSION['count'] ))
            <h1>{{__('basket.h1_empty')}}</h1>
        @else
            <h1>{{__('basket.h1_full')}}</h1>
        <div id="container_basket" class="container_basket menu">   
            @if(isset($basket))
                @foreach($basket as $el => $val)
                    <div class="basket_catalog menu">
                        <button id="close_btn" class="basket_catalog_close" value="{{$val->id}}" name="close_btn">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                        <div class="basket_catalog_img">
                            <img src="/img/menu/{{$val->img}}" alt="{{$val->id}}">
                        </div>
                        <div class="basket_catalog_info_container">
                            <div class="basket_catalog_title"><h3>{{$val->title}}</h3></div>
                            <div class="basket_catalog_price_container">
                                <div class="basket_catalog_price">{{$val->price}}.0MDL</div>
                                <div class="basket_count basket">
                                    <button id="count_btn" class="basket_count_btn" value="{{$val->id}}" name="minus">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <div class="basket_count_result">
                                        <span id="basket_count_result_{{$val->id}}">
                                            {{$_SESSION['prod'][$val->id]}}
                                        </span>
                                    </div>
                                    <button id="count_btn" class="basket_count_btn" value="{{$val->id}}" name="plus">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                                <div class="basket_catalog_price">{{$val->price * $_SESSION['prod'][$val->id]}}.0MDL</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            @isset($_SESSION['all_price'])
                <div class="basket_total_price"><h2>{{__('basket.total')}}: {{$_SESSION['all_price']}}.0 MDL</h2></div>
            @endisset  
        </div> 

        <div class="Catalog_Niz show">
            <div class="Catalog_Niz_Container show basket">
                <div class="Catalog_Niz_right show">
                    <a href=""><button class="btn_basket show beck">{{__('menu.back')}}</button></a>
                </div>
                <div class="Catalog_Niz_right show">
                    <a href="">
                        <button class="btn_basket">{{__('basket.design')}}</button>
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
    {{-- --------------------------------------------------------------------------------------------------------------------------------}}
    {{-- <form id="test_form">
        <input type="hidden" name="sign" value="plus">
        <input type="hidden" name="id_item" value="id">
        <button type="button" id="test_btn">Test</button>
    </form> --}}
    {{-- <div id="test_DOM" class="test_DOM">
        @foreach($_SESSION['prod'] as $el =>$val)
            <div class="test_DOM_content">{{$el}}</div>
        @endforeach
    </div> --}}
    
    {{-- <a href="/delete"><button class="btn_basket test_basket">Удалить все<i class="fa-solid fa-basket-shopping"></i></button></a>
    <a href="/sesion"><button class="btn_basket test_basket">sesion<i class="fa-solid fa-basket-shopping"></i></button></a> --}}
    {{-- <a href={{ route('basket.test')}}><button class="btn_basket test_basket">test<i class="fa-solid fa-basket-shopping"></i></button></a> --}}
    {{-- <button id="button_test">test</button> --}}
    {{-- <style>
        .test_DOM_content{
            display: flex;
            height: 50px;
            width: 50px;
            float: left;
            justify-content: center;
            align-items: center;
            background-color: aqua;
            margin: 10px;
        }
    </style> --}}
    <style>
        .test_basket{
            margin-bottom: 30px; 
        }
    </style>
@endsection
