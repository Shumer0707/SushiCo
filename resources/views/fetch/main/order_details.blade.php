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