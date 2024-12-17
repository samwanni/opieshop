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
                    <h2>Редактировать категорию</h2>
                    <div class="div_deg_edit">
                        <form action="{{url('update_category',$data->id)}}" method="post">
                            @csrf
                            <input class="input_edit" type="text" name="category" value="{{$data->category_name}}">
                            <input class="btn btn-primary" type="submit" value="Редактировать категорию">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.js')
    </body>
</html> 