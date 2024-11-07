@extends('product/main_product')

@section('title')
Админка
@endsection
@section('content')
<h1>Обновить Ингредиент</h1>
<ul>
    @foreach($ingr as $el)
        <div class="container_product_index">
            <div class="title_product"><li id="btn_details" data-name="{{$el->id}}">{{$el->text_ru}}</li></div>
            <a href={{route('product.delete_ingr', ['id' => $el->id])}}>
                <button class="btn_product delete">Удалить</button>
            </a>
        </div>
        <div class="container_product_datails" id="details_{{$el->id}}">
            <ul>
                <form action="{{route('product.add_ingr')}}" method="POST">@csrf
                    <input type="hidden" name="id" value="{{$el->id}}">
                    <textarea name="text_ru" placeholder="Русский">{{$el->text_ru}}</textarea>
                    <textarea name="text_ro" placeholder="Румынский">{{$el->text_ro}}</textarea>
                    <button class="btn_product update">Изменить</button>
                </form>
            </ul>
        </div>
    @endforeach
</ul>
@endsection