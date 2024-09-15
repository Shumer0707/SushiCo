
    @if(!isset($_SESSION['count'] ))
        <h1>Корзина пуста</h1>
    @else
        <div class="basket_h2">
            <h1>Ваша корзина</h1>
        </div>
    
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