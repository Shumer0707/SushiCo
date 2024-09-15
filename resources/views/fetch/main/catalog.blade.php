@if(isset($_SESSION['prod'][$id]))
    <div class="basket_count menu">
        <button id="count_btn" class="basket_count_btn menu" value="{{$id}}" name="minus">
            <i class="fa-solid fa-minus"></i>
        </button>
        <div class="basket_count_result">
            <span id="basket_count_result_{{$id}}">
                {{$_SESSION['prod'][$id]}}
            </span>
        </div>
        <button id="count_btn" class="basket_count_btn menu" value="{{$id}}" name="plus">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
@else
    <button id="add_btn" class="btn_basket" value="{{$id}}" name="plus">
        Добавить <i class="fa-solid fa-basket-shopping"></i>
    </button>
@endif