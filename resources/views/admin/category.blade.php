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
                    <h2>Добавить категорию</h2>
                    <div class="div_deg_cat">  
                        <form action="{{url('add_category')}}" method="post">
                            @csrf
                            <div>
                                <input class="input_cat" type="text" name="category">
                                <input class="btn btn-primary" type="submit" value="Добавить категорию">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div>
                <table class="table_deg_cat">
                    <tr>
                        <th class="th_cat">Название категории</th>
                        <th class="th_cat">Редактировать</th>
                        <th class="th_cat">Удалить</th>
                    </tr>

                        @foreach($data as $data)

                    <tr>
                        <td class="td_cat">{{$data->category_name}}</td>
                        <td class="td_cat">
                            <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Редактировать</a>
                        </td>
                        <td class="td_cat">
                            <a class="btn btn-danger"  href="{{url('delete_category', $data->id)}}">Удалить</a>
                        </td>
                    </tr>

                        @endforeach
                </table>
            </div>

        </div>

        <!-- JavaScript files-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
        <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
        <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('admincss/js/charts-home.js')}}"></script>
        <script src="{{asset('admincss/js/front.js')}}"></script>
    </body>
</html> 