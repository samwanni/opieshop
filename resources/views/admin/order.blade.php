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
                        <h2>Заказы</h2>
                    </div>
                </div>

                <div class="table_center_ord">
                    <table class="table_ord">
                        <tr>
                            <th class="th_ord">ФИО</th>
                            <th class="th_ord">Адрес</th>
                            <th class="th_ord">Номер телефона</th>
                            <th class="th_ord">Продукт</th>
                            <th class="th_ord">Цена</th>
                            <th class="th_ord">Изображение</th>
                            <th class="th_ord">Статус</th>
                            <th class="th_ord">Изменить статус</th>
                            <th class="th_ord">Печатать PDF</th>
                        </tr>

                        @foreach($data as $data)
                        <tr>
                            <td class="td_ord">{{$data->name}}</td>
                            <td class="td_ord">{{$data->rec_address}}</td>
                            <td class="td_ord">{{$data->phone}}</td>
                            <td class="td_ord">{{$data->product->title}}</td>
                            <td class="td_ord">{{$data->product->price}} byn</td>
                            <td class="td_ord">
                                <img height="200" src="products/{{$data->product->image}}">
                            </td>
                            <td class="td_ord">
                                @if($data->status == 'in progress')
                                <span style="color:yellow">{{$data->status}}</span>
                                
                                @elseif($data->status == 'Доставлен')
                                <span style="color:green">{{$data->status}}</span>

                                @else
                                <span>{{$data->status}}</span>
                                @endif
                            </td>
                            <td class="td_ord">
                                <a class="btn btn-secondary" href="{{url('on_the_way',$data->id)}}">В пути</a>
                                <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Доставлен</a>
                            </td>
                            <td class="td_ord">
                                <a href="{{url('print_pdf',$data->id)}}">Печатать PDF</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>

            @include('admin.js')
        </body>
    </html> 