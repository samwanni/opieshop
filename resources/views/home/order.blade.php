<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Мои заказы</title>
            
            @include('home.css')
    </head>
    
    <body>
        <div class="hero_area">
            @include('home.header')
        </div>
    
        <div class="div_center_order">
            <table class="table_order">
                <tr>
                    <th class="th_order">Название продукта</th>
                    <th class="th_order">Цена</th>
                    <th class="th_order">Статус</th>
                    <th class="th_order">Изображение</th>
                </tr>

                @foreach($order as $order)
                <tr>
                    <td class="td_order">{{$order->product->title}}</td>
                    <td class="td_order">{{$order->product->price}} byn</td>
                    <td class="td_order">{{$order->status}}</td>
                    <td class="td_order">
                        <img height="150" src="products/{{$order->product->image}}">
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        @include('home.footer')
    </body>
</html>