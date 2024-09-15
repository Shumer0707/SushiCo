<div class="mini_basket_batton_all_price_wraper">
    @isset($_SESSION['all_price'])
        <div class="mini_basket_batton_all_price">
            <p class="all_price">{{$_SESSION['all_price']}} MDL</p>
        </div>
    @endisset
</div>