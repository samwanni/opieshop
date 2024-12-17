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
                        <h2>Добавить продукт</h2>
                    </div>
                </div>

                <div class="div_deg_add">
                    <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="input_deg_add">
                            <label class="label_add">Название продукта</label>
                            <input class="input_add" type="text" name="title" required>
                        </div>
                    
                        <div class="input_deg_add">
                            <label class="label_add">Описание</label>
                            <textarea class="textarea_add" name="description" required></textarea>
                        </div>
                    
                        <div class="input_deg_add">
                            <label class="label_add">Цена</label>
                            <input class="input_add" type="text" name="price">
                        </div>
                    
                        <div class="input_deg_add">
                            <label class="label_add">Вес</label>
                            <input type="number" name="qty">
                        </div>
                    
                        <div class="input_deg_add">
                            <label class="label_add">Категория</label>
                            <select name="category" required>
                                <option>Выбрать категорию</option>

                                @foreach($category as $category)

                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                                @endforeach
                            
                            </select>
                        </div>
                    
                        <div class="input_deg_add">
                            <label class="label_add">Изображение</label>
                            <input type="file" name="image">
                        </div>
                    
                        <div class="input_deg_add">
                            <input class="btn btn-success" type="submit" value="Добавить продукт">
                        </div>
                    </form>
                </div>
            
            </div>

            @include('admin.js')
        </body>
    </html> 