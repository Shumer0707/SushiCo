
@if(!isset($_SESSION['count'] ))
    <h1>{{__('basket.h1_empty')}}</h1>
@else
    <h1>{{__('basket.h1_full')}}</h1>
<div class="container_basket">
    <div class="container_basket_items">   
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
                            <div class="basket_catalog_price">{{$val->price}}MDL</div>
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
                            <div class="basket_catalog_price">{{$val->price * $_SESSION['prod'][$val->id]}}MDL</div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        @isset($_SESSION['all_price'])
            <div class="basket_close_all">
                {{-- <div class="Catalog_Niz_right show"> --}}
                    <a href={{route('delete.index')}}><button class="btn_basket close_all">{{__('basket.close_all')}}</button></a>
                {{-- </div> --}}
            </div>
            {{-- <div class="basket_total_price"><h2>{{__('basket.total')}}: {{$_SESSION['all_price']}} MDL</h2></div> --}}
        @endisset  
    </div> 
    <div class="container_basket_result">
        <div class="basket_result">
            <div  class="basket_order_details">
                <h4>{{__('basket.your_order')}}</h4>
                @isset($basket)
                    @foreach($basket as $el => $val)
                        <div class="order_details_container">
                            <div class="order_details left">{{$val->title}}</div>
                            <div class="order_details center">x{{$_SESSION['prod'][$val->id]}}</div>
                            <div class="order_details right">{{$val->price * $_SESSION['prod'][$val->id]}} MDL</div>
                        </div>
                    @endforeach
                    <div class="order_details_container">
                        <div class="order_details left">{{__('basket.delivary')}}</div>
                        <div class="order_details center">--</div>
                        @if ($_SESSION['all_price'] < config('my_config.del_min_sum')) 
                        <div class="order_details right">50 MDL</div>
                        @else
                        <div class="order_details right">0 MDL</div>
                        @endif
                    </div>
                    <div class="order_details_container center">
                        <div class="order_details center">{{__('basket.total')}}: <b>{{$_SESSION['all_price']}} MDL</b></div>
                    </div>
                @endisset
            </div>
            <div class="basket_order_details_btn_container">
                <button id="out_form" class="btn_basket mini">{{__('basket.place_order')}}</button>
            </div>
        </div>
        
    </div>
</div>
@endif