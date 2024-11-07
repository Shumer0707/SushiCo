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
        .table_3{
            width: 50%;
        }
        table{
            width: 100%;
            border: red solid 1px;
        }
        th, td{
            padding: 10px;
            align-items: center;
            text-align: center;
            border: silver solid 1px;
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
        {{print_r( $_SESSION['prod'])}}
        <table class="table_1">
            <tr>
                <th>Товар</th>
                <th>Количество</th>
                <th>Цена</th>
            </tr>
            <tr>
                <td>Сет</td>
                <td>1</td>
                <td>500</td>
            </tr>
        </table>

        <table class="table_2">
            <tr>
                <th>Доставка:</th>
                <td>Курьер (Бесплатно)</td>
            </tr>
            <tr>
                <th>Способ оплаты:</th>
                <td>Оплата при доставке</td>
            </tr>
            <tr>
                <th>Всего:</th>
                <td>840 MDL</td>
            </tr>
            <tr>
                <th>Примечание:</th>
                <td>ффффффффф</td>
            </tr>
        </table>
        <h2>Данные закзчика</h2>
        <table class="table_3">
            <tr>
                <th>Имя:</th>
                <td>Вася</td>
            </tr>
            <tr>
                <th>Адрес:</th>
                <td>Trandafirilor52</td>
            </tr>
            <tr>
                <th>Телефон:</th>
                <td>068684938</td>
            </tr>
            <tr>
                <th>Емайл:</th>
                <td>Shumer0707@mail.ru</td>
            </tr>
        </table>
        <p><i>В случае возникновения каких либо вопросов и/или проблем просим звонить по номерам указанным ниже:</i></p>
        <i>0700000000 0600000000</i>
        <div class="header">
            <div class="img dawn"><img src="" alt="logo"></div>
        </div> 
    </div>
</body>
</html>