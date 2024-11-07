<div class="container_menu">
    {{-- <h1>{{__('menu.menu')}} : {{$category}}</h1> --}}
    @if($menu != '')
        <div id="wraper_catalog_menu">
            @foreach($menu[0] as $el)
                <div id="catalog" class="Сatalog_menu" id="{{$el->id}}">
                    <div class="Catalog_h3">
                        <h3>{{$el->title}}</h3>
                    </div>
                    <div class="Catalog_Verh"><a href="/menu/show/{{$el->id}}"><img src={{asset("storage/$el->img")}} alt="Кортинка меню" class="cover"></a></div>
                    <div class="Catalog_Center">
                        <p>{{$el->gram}}</p>
                        @if(app()->getLocale() == 'ru')
                            <p>{{$el->description_ru}}</p>
                        @elseif(app()->getLocale() == 'ro')
                            <p>{{$el->description_ro}}</p>   
                        @endif
                    </div>
                    <div class="Catalog_Niz">
                        <div class="Catalog_Niz_Container">{{$el->price}} MDL</div>
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
            @endforeach
        </div>
    @endif
</div>