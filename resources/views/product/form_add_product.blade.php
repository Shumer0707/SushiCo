@extends('product/main_product')

@section('title')
Добавить товар
@endsection
@section('content')
    @include('product.product_error')
    <h1>Добавить товар</h1>
    <form action="{{route('product.add_product')}}" method="POST" enctype="multipart/form-data">@csrf
        <input type="text" name="title" placeholder="Название" >
        <textarea name="description_ru" placeholder="Краткое описание (русский)"></textarea>
        <textarea name="description_ro" placeholder="Краткое описание (румынский)"></textarea>
        <input type="number" name="gram" placeholder="Граммы" >
        <input type="number" name="price" placeholder="Цена" >
        <input type="text" name="category" placeholder="Категория" >
        <label for="img_product">Укажите картинку</label>
        <input type="file" name="img" id="img_product" placeholder="Картинка" accept="image/png, image/jpeg" required>
        <div class="dropdown">
            <span>Выберите ингредиенты</span>
            <ul>
                @foreach ($ingr as $el)
                <li>
                    @if(in_array($el->text_ru, $checked))
                        <input type="checkbox" id="opt{{$el->id}}" name="ingr[]" value="{{$el->id}}" checked>
                    @else
                        <input type="checkbox" id="opt{{$el->id}}" name="ingr[]" value="{{$el->id}}">
                    @endif
                    <label for="opt{{$el->id}}">{{$el->text_ru}}</label>
                </li>
                @endforeach
            </ul>
        </div>
        <button>Добавить</button>
    </form>
    
    <h2>Добавить ингредиент если нет в списке</h2>
    <form action="{{route('product.add_ingr')}}" method="POST">@csrf
        <textarea name="text_ru" placeholder="Русский"></textarea>
        <textarea name="text_ro" placeholder="Румынский"></textarea>
        <button>Добавить</button>
    </form>
@endsection

