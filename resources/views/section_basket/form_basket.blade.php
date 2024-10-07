<div class="basket_form_plug"></div>
<div class="basket_form_content">
    @if(isset($_SESSION['count']))
        <div  id="basket_form_wraper" class="basket_form_wraper">
            <div class="basket_form_h2">
                <h2>{{__('basket.place_order')}}</h2>
            </div>
            <form id="basket_form">
                <div class="basket_form_h3">
                    <h3>{{__('basket.personal_data')}}</h3>
                </div>
                <div class="personal_data_container">
                    <div class="personal_data">
                        <label for="fname"><i class="fa fa-user"></i> {{__('basket.name')}}</label>
                        <input type="text" id="username" name="username" placeholder="John M. Doe" required>
                        <div id="username_error" class="basket_error"></div>
                        {{-- <p class="username_error"></p> --}}
                    </div>
                    <div class="personal_data">
                        <label for="email"><i class="fa fa-envelope"></i> {{__('basket.email')}}</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required>
                        <div id="email_error" class="basket_error"></div>
                    </div>
                    <div class="personal_data">
                        <label for="adr"><i class="fa-solid fa-phone"></i> {{__('basket.phone')}}</label>
                        <input type="number" id="phone" name="phone" placeholder="068600000"  required >
                        <div id="phone_error" class="basket_error"></div>
                    </div>
                    <div class="personal_data">
                        <label for="adr"><i class="fa-solid fa-phone"></i> {{__('basket.phone_confirm')}}</label>
                        <input type="number" id="phone_confirmation" name="phone_confirmation" placeholder="068600000" required>
                        <div id="phone_confirmation_error" class="basket_error"></div>
                    </div>
                </div>
                <div class="basket_form_h3">
                    <h3>{{__('basket.delivary_terms')}}</h3>
                </div>
                <div class="personal_data_container">
                    <div  class="basket_form_btn_container delivery">
                        <input class="disabled_input" type="radio" id="delivery" name="logistics" value="delivery" checked/>
                        <label class="basket_form_btn" for="delivery">{{__('basket.delivary')}}</label>
                    </div>
                    <div  class="basket_form_btn_container delivery">
                        <input class="disabled_input" type="radio" id="self_pickup" name="logistics" value="self_pickup" />
                        <label class="basket_form_btn" for="self_pickup">{{__('basket.pickup')}}</label>
                    </div>
                    <div id="personal_data_address" class="personal_data_address">
                        <div id class="personal_data">
                            <label for="adr"><i class="fa-solid fa-phone"></i> {{__('basket.address')}}</label>
                            <input type="text" id="address" name="address" placeholder="Ismail 86" required>
                            <div id="address_error" class="basket_error"></div>
                        </div>
                        <div class="personal_data"><span>{{__('basket.free')}}</span></div>
                    </div>
                    {{-- <div class="personal_data">
                        <label for="adr"><i class="fa-solid fa-phone"></i> Детали заказа</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div> --}}
                </div>
                <div class="basket_form_h3">
                    <h3>{{__('basket.payment_method')}}</h3>
                </div>
                <div class="personal_data_container">
                    <div  class="basket_form_btn_container delivery">
                        <input class="disabled_input" type="radio" id="cash" name="payment" value="cash" checked/>
                        <label class="basket_form_btn" for="cash">{{__('basket.cash')}}</label>
                    </div>
                    <div  class="basket_form_btn_container delivery">
                        <input class="disabled_input" type="radio" id="card_on_site" name="payment" value="card_on_site"/>
                        <label class="basket_form_btn" for="card_on_site">{{__('basket.card')}}</label>
                    </div>
                </div>
                <div class="basket_form_h3">
                    <h3>{{__('basket.order_details')}}</h3>
                </div>
                <div class="personal_data_container">
                    <div id="order_details" class="personal_data order_details">
                        <h4>{{__('basket.your_order')}}</h4>
                        @isset($basket)
                            @foreach($basket as $el => $val)
                                <div class="order_details_container">
                                    <div class="order_details left">{{$val->title}}</div>
                                    <div class="order_details center">x{{$_SESSION['prod'][$val->id]}}</div>
                                    <div class="order_details right">{{$val->price * $_SESSION['prod'][$val->id]}}.0MDL</div>
                                </div>
                            @endforeach
                            @if ($_SESSION['all_price'] < config('my_config.del_min_sum')) 
                                <div class="order_details_container">
                                    <div class="order_details left">{{__('basket.delivary')}}</div>
                                    <div class="order_details center">--</div>
                                    <div class="order_details right">50.0MDL</div>
                                </div>
                                <div class="order_details_container">
                                    <div class="order_details left"></div>
                                    <div class="order_details center">{{__('basket.total')}}:</div>
                                    <div class="order_details right">
                                        <b>{{$_SESSION['all_price'] + config('my_config.del_price')}}.0MDL</b>
                                    </div>
                                </div>
                            @else
                                <div class="order_details_container">
                                    <div class="order_details left">{{__('basket.delivary')}}</div>
                                    <div class="order_details center">--</div>
                                    <div class="order_details right">0.0MDL</div>
                                </div>
                                <div class="order_details_container">
                                    <div class="order_details left"></div>
                                    <div class="order_details center">{{__('basket.total')}}:</div>
                                    <div class="order_details right"><b>{{$_SESSION['all_price']}}.0MDL</b></div>
                                </div>
                            @endif
                        @endisset
                    </div>
                    <div class="personal_data">
                        <label for="fname"><i class="fa fa-user"></i> {{__('basket.additional')}}</label>
                        <input type="text" id="details" name="details" placeholder="количество палочек, особые условия доставки и тд.">
                    </div> 
                </div>
                <div class="basket_form_btn_container">
                    <button id="basket_form_btn" class="basket_form_btn" type="button">{{__('basket.payment')}}</button>
                </div>
                <div class="basket_form_btn_container_error display_none">
                    <span>
                        Ошибка сервера! Сорян. Наберите пожалуйста номер 0700000000. Пусть наберут криворукого программиста. То-есть меня!
                    </span>
                </div>
            </form>
        </div>
    @endif
</div>