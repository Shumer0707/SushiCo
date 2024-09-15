
<a href="#header" class="up_a" id="up_a">
    {{-- <div class="up_button" id="up_button" onscroll="myFunk()"> --}}
    <div class="up_button" id="up_button">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
</a>
<div class="mini_basket_batton_close">
    <i class="fa-solid fa-xmark"></i>
</div>
<div class="mini_basket_batton_container">
    <div class="mini_basket_batton_icon">
        <i class="fa-solid fa-basket-shopping"></i>
    </div>
    <div class="mini_basket_batton_all_price_wraper">
        <div class="mini_basket_batton_all_price">
            @if(isset($_SESSION['all_price']))
                <p class="all_price">{{$_SESSION['all_price']}}MDL</p>
            @else   
                <p class="all_price">00.0MDL</p>
            @endif
        </div>
    </div>
</div>
<div class="mini_basket">
    <div class="mini_basket_catalog_wrapper">
    {{-- <div class="Catalog_h2"><h2>КОРЗИНА</h2></div> --}}
        <div class="mini_basket_catalog_container">
            @isset($basket)
                @foreach($basket as $el)
                <div class="mini_basket_catalog">
                    <button id="close_btn" class="mini_basket_catalog_close" value="{{$el->id}}" name="close_btn">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="mini_basket_catalog_img">
                        <img src="/img/menu/{{$el->img}}" alt="{{$el->id}}">
                    </div>
                    <div class="mini_basket_catalog_info_container">
                        <div class="mini_basket_catalog_title"><h5>{{$el->title}}</h5></div>
                        <div class="mini_basket_catalog_price_container">
                            <div class="mini_basket_catalog_price">{{$el->gram}}</div>

                            <div class="mini_basket_catalog_price">{{$el->price}}.0MDL</div>
                        </div>
                        <div class="mini_basket_catalog_price_container">
                            <div class="mini_basket_count">
                                <button id="count_btn" class="mini_basket_count_btn" value="{{$el->id}}" name="minus">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <div class="mini_basket_count_result">
                                    <span id="basket_count_result_{{$el->id}}">
                                        {{$_SESSION['prod'][$el->id]}}
                                    </span>
                                </div>
                                <button id="count_btn" class="mini_basket_count_btn" value="{{$el->id}}" name="plus">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endisset
        </div>
        @isset($_SESSION['all_price'])
            <div class="mini_basket_total_price"><h3>Всего: {{$_SESSION['all_price']}}.0 MDL</h3></div>
        @endisset
    </div>
    <div class="mini_btn_basket_wrapper">
        <a href={{route('basket.index')}}>
            <button class="btn_basket mini">
                <span>Перейти в корзину</span>
            </button>
        </a>
    </div>
</div>
<div class="mini_basket_plug">
</div>
