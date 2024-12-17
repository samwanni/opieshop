<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Печать PDF</title>
        </head>
        
        <body>
            <center>
                <h3>Имя покупателя : {{$data->name}}</h3>
                <h3>Адрес : {{$data->rec_address}}</h3>
                <h3>Номер телефона : {{$data->phone}}</h3>

                <h2>Название продукта : {{$data->product->title}}</h2>
                <h2>Цена : {{$data->product->price}} byn</h2>
                <img heigh="250" width="200" src="products/{{$data->product->image}}" alt="">
            </center>
        </body>
    </html>
