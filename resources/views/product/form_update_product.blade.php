@extends('product/main_product')

@section('title')
Админка
@endsection
@section('content')
<h1>Изменить</h1>
<form action="{{route('product.update_product')}}" method="POST" enctype="multipart/form-data">@csrf
    <input type="hidden" name="id" value="{{$item['id']}}">
    <input type="text" name="title" placeholder="Название" value="{{$item['title']}}">
    <textarea name="description_ru" placeholder="Краткое описание (русский)" >{{$item['description_ru']}}</textarea>
    <textarea name="description_ro" placeholder="Краткое описание (румынский)" >{{$item['description_ro']}}</textarea>
    <input type="number" name="gram" placeholder="Граммы" value="{{$item['gram']}}">
    <input type="number" name="price" placeholder="Цена" value="{{$item['price']}}">
    <input type="text" name="category" placeholder="Категория" value="{{$item['category']}}">
    <label for="img_product">Укажите картинку</label>
    <input type="file" name="img" id="img_product" placeholder="Картинка" accept="image/png, image/jpeg">
    <div class="dropdown">
        <span>Выберите ингредиенты</span>
        <ul>
            @foreach ($ingr as $el)
            <li>
                @if(in_array($el->text_ru, $item_ingr))
                    <input type="checkbox" id="opt{{$el->id}}" name="ingr[]" value="{{$el->id}}" checked>
                @else
                    <input type="checkbox" id="opt{{$el->id}}" name="ingr[]" value="{{$el->id}}">
                @endif
                <label for="opt{{$el->id}}">{{$el->text_ru}}</label>
            </li>
            @endforeach
        </ul>
    </div>
    <button class="btn_product update">Изменить</button>
</form>
@endsection