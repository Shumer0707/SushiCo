
@if(isset($_SESSION['count'], $_SESSION['all_price']))
    <span class="all_price">{{$_SESSION['all_price']}}.0 MDL</span>
@else
    <span class="all_price">00.0 MDL</span>
@endif
