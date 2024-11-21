<div class="mini_basket_catalog_container">
    @isset($basket)
        @foreach($basket as $el)
        <div class="mini_basket_catalog">
            <button id="close_btn" class="mini_basket_catalog_close" value="{{$el->id}}" name="close_btn">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="mini_basket_catalog_img">
                <img src={{asset("storage/$el->img")}} alt="{{$el->id}}">
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
