    <!DOCTYPE html>
        <html>
            <head> 

                @include('admin.css')

            </head>
            <body>
                @include('admin.header')

                @include('admin.sidebar')

                <div class="page-content">
                    <div class="page-header">
                        <div class="container-fluid">
                            <h2>Все продукты</h2>
                        </div>
                    </div>

                    <form action="{{url('product_search')}}" method="get">
                        @csrf
                        <input class="input_view" type="search" name="search">
                        <input type="submit" class="btn btn-secondary" value="Поиск">
                    </form>

                    <div class="div_deg_view">
                        <table class="table_deg_view"> 
                            <tr>
                                <th class="th_view">Название</th>
                                <th class="th_view">Описание</th>
                                <th class="th_view">Категория</th>
                                <th class="th_view">Цена</th>
                                <th class="th_view">Вес</th>
                                <th class="th_view">Изображение</th>
                                <th class="th_view">Редактировать</th>
                                <th class="th_view">Удалить</th>
                                
                            </tr>
                            @foreach($product as $products)
                            <tr>
                                <td class="td_view">{{$products->title}}</td>
                                <td class="td_view desc-td">{{$products->description}}</td>
                                <td class="td_view">{{$products->category}}</td>
                                <td class="td_view">{{$products->price}} byn</td>
                                <td class="td_view">{{$products->quantity}} гр</td> 
                                <td class="td_view"><img height="200" src="products/{{$products->image}}"></td>
                                <td class="td_view"><a class="btn btn-success" href="{{url('update_product',$products->id)}}">Редактировать</a></td>
                                <td class="td_view"><a class="btn btn-danger" href="{{url('delete_product',$products->id)}}">Удалить</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    
                    <div class="div_deg">
                    {{$product->onEachSide(1)->links()}}
                </div>
                
                @include('admin.js')
            </body>
        </html> 