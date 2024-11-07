<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <style>
        .table{
            width: 50%;
            margin: auto;
            /* background-color: azure; */
            padding: 10px;
        }
        table{
            width: 100%;
            border: red solid 1px;
            table-layout: fixed;
        }
        th, td{
            padding: 10px;
            width: 25%;
            max-width: 50%;
            align-items: center;
            text-align: center;
            border: silver solid 1px;
            word-wrap: break-word;

        }
        .header{
            width: 100%;
            /* height: 100px; */
        }
        .img{
            width: 50%;
            height: auto;
        }
        .img img{
            object-fit:contain;
            width: 100%;
            height: auto;
            float: left;
        }
        .img.dawn{
            margin-top: 20px;
        }
        .order_h{
            text-align: center;
            width: 50%; 
        }
    </style>
    <div class="table">
        <div class="header"> 
            <div class="img"><img src="" alt="logo"></div>
            <div class="order_h"><h2>食欲旺盛</h2></div>
        </div>
        <div><h1>Благодарим за покупку!</h1></div>
        <p>Ваш заказ был принят и сейчас находится в обработке. Ожидайте звонок.</p>
        <p>Информация о заказе приведена ниже:</p>
        <h2>Заказ #1 (01.10.2024)</h2>
        <table class="table_1">
            <tr>
                <th>Товар</th>
                <th>Количество</th>
                <th>Цена шт.</th>
                <th>Итог</th>
            </tr>
            @foreach ($items as $el)
                <tr>
                    <td>{{$el['title']}}</td>
                    <td>{{$el['count']}}</td>
                    <td>{{$el['price']}}</td>
                    <td>{{$el['all_price']}}</td>
                </tr>
            @endforeach
            @if(isset($data['address']))
                <tr>
                    <td>Доставка</td>
                    <td>-</td>
                    <td>-</td>
                    @if ($_SESSION['all_price'] < config('my_config.del_min_sum'))
                        <th>{{config('my_config.del_price')}}</th>
                    @else
                        <th>0</th>
                    @endif
                </tr>
            @endif
            <tr>
                <th></th>
                <th></th>
                <th>Всего</th>
                <th>{{$_SESSION['all_price']}}</th>
            </tr>
        </table>
        <p></p>
        <h2>Данные закзчика</h2>
        <table class="table_2">
            <tr>
                <th>Дополнительный пожелания:</th>
                @if (isset($data['details']))
                    <td>{{$data['details']}}</td>
                @else
                    <td>-</td>
                @endif
                
            </tr>
            <tr>
                <th>Доставка:</th>
                <td>{{$data['logistics']}}</td>
            </tr>
            @if(isset($data['address']))
                <tr>
                    <th>Адрес:</th>
                    @if(isset($data['address_apartment']))
                        <td>{{$data['address']}} {{$data['address_home']}} ap.{{$data['address_apartment']}}</td>
                    @else
                        <td>{{$data['address']}} {{$data['address_home']}}</td>
                    @endif
                </tr>  
                <tr>
                    <th>-</th>
                    <td>{{$data['building']}}</td>
                </tr> 
            @endif
            <tr>
                <th>Способ оплаты:</th>
                <td>{{$data['payment']}}</td>
            </tr>
            <tr>
                <th>Имя:</th>
                <td>{{$data['username']}}</td>
            </tr>
            <tr>
                <th>Емайл:</th>
                <td>{{$data['email']}}</td>
            </tr>
            <tr>
                <th>Телефон:</th>
                <td>{{$data['phone']}}</td>
            </tr>
        </table>
        
        <p><i>В случае <b>ошибки или возникновения каких либо вопросов</b> просим звонить по номерам указанным ниже:</i></p>
        <i>0700000000 0600000000</i>
        <div class="header">
            <div class="img dawn"><img src="" alt="logo"></div>
        </div> 
    </div>
</body>
</html>