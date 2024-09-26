<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <style>
        .mail_wrapper{
    
        }
        .mail_container{
            border: solid #34302f 1px;
            border-radius: 10px;
            background-color: #d3cdcd;
            float: left;
            width: 40%;
            margin: 10px;
            padding: 10px;
        }
        .mail{
            width: 50%;
            float: left;
        }
        .mail.items{
            width: 33%;
        }
    </style>
    <div class="mail_wrapper">
        <div class="mail_container">
            <h2>Данные клиента</h2>
            <div class="mail"><h4>Имя:</h4></div> <div class="mail"><h4>{{$data['username']}}</h4></div>
            <div class="mail"><h4>Мыло:</h4></div> <div class="mail"><h4>{{$data['email']}}</h4></div>
            <div class="mail"><h4>Телефон:</h4></div> <div class="mail"><h4>{{$data['phone']}}</h4></div>
            <div class="mail"><h4>Доставка:</h4></div> <div class="mail"><h4>{{$data['logistics']}}</h4></div>
            <div class="mail"><h4>Адрес:</h4></div> <div class="mail"><h4>{{$data['address']}}</h4></div>
            <div class="mail"><h4>Оплата:</h4></div> <div class="mail"><h4>{{$data['payment']}}</h4></div>
            <div class="mail"><h4>Детали:</h4></div> <div class="mail"><h4>{{$data['details']}}</h4></div>
        </div>
        <div class="mail_container">
            <h2>Данные заказа</h2>
            @foreach($basket as $el => $val)
                <div class="order_details_container">
                    <div class="mail items"><h4>{{$val->title}}<h4></div>
                    <div class="mail items"><h4>x{{$_SESSION['prod'][$val->id]}}<h4></div>
                    <div class="mail items"><h4>{{$val->price * $_SESSION['prod'][$val->id]}}.0MDL<h4></div>
                </div>
            @endforeach
            @if ($_SESSION['all_price'] < config('my_config.del_min_sum')) 
                    <div class="order_details_container">
                        <div class="mail items"><h4>Доставка<h4></div>
                        <div class="mail items"><h4>--<h4></div>
                        <div class="mail items"><h4>50.0MDL<h4></div>
                    </div>
                    <div class="order_details_container">
                        <div class="mail items"><h4><h4></div>
                        <div class="mail items"><h4>Всего:<h4></div>
                        <div class="mail items"><h4>{{$_SESSION['all_price'] + config('my_config.del_price')}}.0MDL<h4></div>
                    </div>
                @else
                    <div class="order_details_container">
                        <div class="mail items"><h4>Доставка<h4></div>
                        <div class="mail items"><h4>--<h4></div>
                        <div class="mail items"><h4>0.0MDL<h4></div>
                    </div>
                    <div class="order_details_container">
                        <div class="mail items"><h4><h4></div>
                        <div class="mail items"><h4>Всего:<h4></div>
                        <div class="mail items"><h4>{{$_SESSION['all_price']}}.0MDL<h4></div>
                    </div>
                @endif
        </div>
    </div>
</body>
</html>

