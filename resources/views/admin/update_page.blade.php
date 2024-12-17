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
                        <h2>Редактировть продукт</h2>
                    </div>
                </div>

                <div class="div_deg_update">
                    <form action="{{url('edit_product',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="label_update">Название</label>
                            <input class="input_update" type="text" name="title" value="{{$data->title}}">
                        </div>
                        <div>
                            <label class="label_update">Описание</label> 
                            <textarea class="textarea_update" name="description">{{$data->description}}</textarea>
                        </div>
                        <div>
                            <label class="label_update">Цена</label>
                            <input class="input_update" type="text" name="price" value="{{$data->price}} byn">
                        </div>
                        <div>
                            <label class="label_update">Вес</label>
                            <input type="number" name="quantity" value="{{$data->quantity}} гр">
                        </div>
                        <div>
                            <label class="label_update">Категория</label>
                            <select name="category">
                                <option value="{{$data->category}}">{{$data->category}}</option>
                                @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="label_update">Текущее изображение</label>
                            <img width="150" src="/products/{{$data->image}}">
                        </div>
                        <div>
                            <label class="label_update">Новое изображение</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit" value="Сохранить изменения">
                        </div>
                    </form>
                </div>
            </div>

            @include('admin.js')
        </body>
    </html> 