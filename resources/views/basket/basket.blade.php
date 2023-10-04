@extends('layout/main')

@section('title')
    Корзина
@endsection
@section('content')
    <h1>Корзина</h1>
        <div class="container_basket menu">
            <div class="basket_katalog ">
                <div class=""></div>
            </div>
        </div>
    <a href="/delete"><button class="btn_basket">Удалить все<i class="fa-solid fa-basket-shopping"></i></button></a>
@endsection
