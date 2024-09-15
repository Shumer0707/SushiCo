<div class="mini_basket_batton_all_price">
    @if(isset($_SESSION['all_price']))
        <p class="all_price">{{$_SESSION['all_price']}}MDL</p>
    @else   
        <p class="all_price">00.0MDL</p>
    @endif
</div>