@if(count($errors) > 0)
    @foreach ($errors -> all() as $el)      
        <div class="product_error">{{$el}}</div>
    @endforeach 
@endif

@isset($succes_product)
    <div class="succes_product">{{$succes_product}}</div>
@endisset

@if (session('error_product'))
    <div class="error_product">{{session('error_product')}}</div>
@endif

<style>
    .succes_product{
        background-color: #7fe381;
    }
    .error_product{
        background-color: #fe2b2b;
    }
</style>