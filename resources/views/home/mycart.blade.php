<!DOCTYPE html>
    <html>
        <head>
            @include('home.css')
        </head>

        <body>
            <div class="hero_area">
                @include('home.header')
            </div>        
            
            <div class="div_deg_mycart">
                <div class="order_deg_mycart">
                    
                    <form action="{{url('confirm_order')}}" method="Post">
                        @csrf

                        <div class="div_gap_mycart">
                            <label class="label_mycart">ФИО:</label>
                            <input type="text" name="name">
                        </div>

                        <div class="div_gap_mycart">
                            <label class="label_mycart">Адрес:</label>
                            <textarea name="address"></textarea>
                        </div>

                        <div class="div_gap_mycart">
                            <label class="label_mycart">Номер телефона</label>
                            <input type="text" name="phone" value="">
                        </div>

                        <div class="div_gap_mycart">
                            <input class="btn btn-success" type="submit" value="Оформить заказ">
                        </div>
                    </form>
                </div>
                
                <div>
                    <table class="table_mycart">
                        <tr>
                            <th class="th_mycart">Название продукта</th>
                            <th class="th_mycart">Цена</th>
                            <th class="th_mycart">Изображение</th>
                            <th class="th_mycart">Удалить</th>
                        </tr>

                        <?php
                            $value=0;
                        ?>

                        @foreach($cart as $cart)
                        <tr>
                            <td class="td_mycart">{{$cart->product->title}}</td>
                            <td class="td_mycart">{{$cart->product->price}} byn</td>
                            <td class="td_mycart"><img width="70" src="/products/{{$cart->product->image}}"></td>
                            <td class="td_mycart">
                                <a class="btn btn-success" href="{{url('delete_cart',$cart->id)}}">Удалить</a>
                            </td>
                        </tr>

                        <?php
                        $value = $value + $cart->product->price;
                        ?>

                        @endforeach
                    </table>
                </div>
            </div>

            <div class="cart_value_mycart">
                <h3>Общая сумма заказа: {{$value}} byn</h3>
            </div>
    
            @include('home.footer')
        </body>
    </html>