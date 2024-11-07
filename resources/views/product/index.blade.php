@extends('product/main_product')

@section('title')
Админка
@endsection
@section('content')
    <h1>Каталог</h1>
    @foreach ($category as $cat)
    <h2>{{$cat}}</h2>
    <ul>
        @foreach($menu as $el)
            @if($el->category == $cat)
                <div class="container_product_index">
                    <a href={{route('product.form_update_product',['id' => $el->id])}}>
                        <button class="btn_product update">Изменить</button>
                    </a>
                    <div class="title_product"><li id="btn_details" data-name="{{$el->id}}">{{$el->title}}</li></div>
                    <a href={{route('product.delete_product', ['id' => $el->id])}}>
                        <button class="btn_product delete">Удалить</button>
                    </a>
                </div>
                <div class="container_product_datails" id="details_{{$el->id}}">
                    <ul>
                        <li>{{$el->description_ru}}</li>
                        <li>{{$el->description_ro}}</li>
                        <li>gram : {{$el->gram}}</li>
                        <li>price : {{$el->price}}</li>
                        <li>{{$el->category}}</li>
                        <div><img src={{asset("storage/$el->img")}} alt=""></div>
                    </ul>
                </div>
            @endif
        @endforeach
    </ul>
    @endforeach
@endsection