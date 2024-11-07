<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="header_product">
            <a href="{{route('product.index')}}"><button class="btn_product home">Главная</button></a>
            <a href="{{route('product.form_add_product')}}"><button class="btn_product add">Добавить товар</button></a>
            <a href="{{route('product.form_update_ingr')}}"><button class="btn_product update">Обновить ингредиент</button></a>
        </div>
    </header>
    <main class="product_main">
        <div class="wrapper_product" id="wrapper_product">
            @yield('content')
        </div>
    </main>
</body>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    h1 ,h2{
        margin: 10px;
        text-align: center;
    }
    .header_product{
        width: 50%;
        margin-left: 25%;
        background-color: black;
    }
    .btn_product{

    }

    .wrapper_product{
        width: 50%;
        margin-left: 25%;
        padding: 10px;
    }
    .container_product_index{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: solid 1px #6d6e6c;
    }
    .title_product{
        width: 50%;
    }
    .btn_product.home{
        margin: 10px;
    }
    .btn_product.add{
        background-color: #aceca9;
        margin: 10px;
    }
    .btn_product.update{
        background-color: #e3eca9;
    }
    .btn_product.delete{
        background-color: #e57974;
    }
    input[type=text],input[type=number]{
        padding: 5px;
        margin-top: 5px;
        width: 100%;
    }
    input[type=file]{
        padding: 5px;
        margin-top: 5px;
        width: 30%;
    }
    textarea{
        margin-top: 5px;
        overflow: auto;
        resize: none;
        width: 100%;
        padding: 5px;
        border-radius: 3px;
        height: 10vh;
    }
    button{
        padding: 5px;
        margin-top: 5px;
    }
    .btn_product:hover{
        background-color: aqua;
        cursor: pointer;
    }
    .container_product_datails{
        display: none;
    }
    #btn_details{
        cursor: pointer;
    }
    .active{
        display: block;
    }
</style>
<script>
  wrapper_product = document.querySelector('#wrapper_product');
  async function viewPopup(e){
    if(e.target.id == 'btn_details'){
        const details = document.querySelector("#details_"+e.target.dataset.name);
        console.log(details);
        details.classList.toggle('active');
    }
}
if(wrapper_product){
    wrapper_product.addEventListener('click', viewPopup);
}
</script>