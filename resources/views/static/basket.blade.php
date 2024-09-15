@extends('layout/main')

@section('title')
    Корзина
@endsection
@section('content')  
    <div id="wraper_basket">
        @if(!isset($_SESSION['count'] ))
            <h1>Корзина пуста</h1>
        @else
            <h1>Ваша корзина</h1>
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
                                <div class="basket_count">
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
                <div class="basket_total_price"><h2>Всего: {{$_SESSION['all_price']}}.0 MDL</h2></div>
            @endisset  
        </div> 
        @endif
    </div>
    {{-- ------------------------------------------------------------------------------------------------------------------------------ --}}
    @if(isset($_SESSION['count']))
    <div class="basket_form_h2">
        <h2>Оформить заказ</h2>
    </div>
    <div  id="basket_form_wraper" class="basket_form_wraper">
        <form id="basket_form">
            <div class="basket_form_h3">
                <h3>Персональные данные</h3>
            </div>
            <div class="personal_data_container">
                <div class="personal_data">
                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" id="username" name="username" placeholder="John M. Doe" required>
                    <div id="username_error" class="basket_error"></div>
                    {{-- <p class="username_error"></p> --}}
                </div>
                <div class="personal_data">
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" id="email" name="email" placeholder="john@example.com" required>
                    <div id="email_error" class="basket_error"></div>
                </div>
                <div class="personal_data">
                    <label for="adr"><i class="fa-solid fa-phone"></i> Phone</label>
                    <input type="number" id="phone" name="phone" placeholder="068600000"  required >
                    <div id="phone_error" class="basket_error"></div>
                </div>
                <div class="personal_data">
                    <label for="adr"><i class="fa-solid fa-phone"></i> Phone confirmation</label>
                    <input type="number" id="phone_confirmation" name="phone_confirmation" placeholder="068600000" required>
                    <div id="phone_confirmation_error" class="basket_error"></div>
                </div>
            </div>
            <div class="basket_form_h3_wrapper">
                <div  class="basket_form_btn_container delivery">
                    <input class="disabled_input" type="radio" id="delivery" name="logistics" value="delivery" checked/>
                    <label class="basket_form_btn" for="delivery">Доставка</label>
                </div>
                <div  class="basket_form_btn_container delivery">
                    <input class="disabled_input" type="radio" id="self_pickup" name="logistics" value="self_pickup" />
                    <label class="basket_form_btn" for="self_pickup">Самовывоз</label>
                </div>
            </div>
            <div class="personal_data_container">
                <div id="personal_data_address" class="personal_data_address">
                    <div id class="personal_data">
                        <label for="adr"><i class="fa-solid fa-phone"></i> Address</label>
                        <input type="text" id="address" name="address" placeholder="Ismail 86" required>
                        <div id="address_error" class="basket_error"></div>
                    </div>
                    <div class="personal_data"><span>Доставка от 500.0 MDL бесплатно</span></div>
                </div>
                {{-- <div class="personal_data">
                    <label for="adr"><i class="fa-solid fa-phone"></i> Детали заказа</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div> --}}
            </div>
            <div class="basket_form_h3">
                <h3>Детали заказа</h3>
            </div>
            <div class="personal_data_container">
                <div id="order_details" class="personal_data order_details">
                    <h4>Ваш заказ</h4>
                    @isset($basket)
                        @foreach($basket as $el => $val)
                            <div class="order_details_container">
                                <div class="order_details left">{{$val->title}}</div>
                                <div class="order_details center">x{{$_SESSION['prod'][$val->id]}}</div>
                                <div class="order_details right">{{$val->price * $_SESSION['prod'][$val->id]}}.0MDL</div>
                            </div>
                        @endforeach
                            <div class="order_details_container">
                                <div class="order_details left"></div>
                                <div class="order_details center">Всего:</div>
                                <div class="order_details right"><b>{{$_SESSION['all_price']}}.0MDL</b></div>
                            </div>
                    @endisset
                </div>
                <div class="personal_data">
                    <label for="fname"><i class="fa fa-user"></i> Дополнительные пожелания</label>
                    <input type="text" id="details" name="details" placeholder="количество палочек, особые условия доставки и тд.">
                </div> 
            </div>
            <div class="basket_form_btn_container">
                <button id="basket_form_btn" class="basket_form_btn" type="button">К оплате</button>
            </div>
            {{-- <div class="basket_form_btn_container_error display_none">
                <span>Ошибка сервера! Сорян. Наберите пожалуйста номер 0700000000. Пусть наберут криворукого программиста. То-есть меня!</span>
            </div> --}}
        </form>
    </div>
    @endif
    
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
