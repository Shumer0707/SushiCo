<div id="all_style">
    @if(isset($_SESSION['count']))
        <style>
            .icon_container .fa-solid::after, .mini_basket_batton_icon .fa-solid::after{
                content:"10";
            }
            .mini_basket_batton_icon{
                height: 75%;
            }
        </style>
    @else
        <style>
            .icon_container .fa-solid::after, .mini_basket_batton_icon .fa-solid::after{
                content:"none";
            }
            .mini_basket_batton_icon{
                height: 100%;
            }
        </style>
    @endif
</div>
