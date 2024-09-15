@if(isset($_SESSION['count']))
    <style>
        .icon_container .fa-solid::after, .mini_basket_batton_icon .fa-solid::after{
            content:"{{$_SESSION['count']}}";
        }
        /* .mini_basket_batton_icon{
            height: 75%;
        } */
    </style>
@else
    <style>
        .icon_container .fa-solid::after, .mini_basket_batton_icon .fa-solid::after{
            content:none;
        }
        /* .mini_basket_batton_icon{
            height: 100%;
        } */
    </style>
@endif
