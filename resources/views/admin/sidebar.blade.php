<div class="d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar">
                <img src="/admincss/img/avatar-6.png" alt="..." class="img-fluid rounded-circle">
            </div>
            
            <div class="title">
                <h1 class="h5">O.PIE</h1>
                <p>Администратор</p>
            </div>
        </div>
        
        <span class="heading">Главная</span>

        <ul class="list-unstyled">
            <li>
                <a href="{{url('admin/dashboard')}}"> 
                    <i class="icon-home"></i>Главная 
                </a>
            </li>
            <li>
                <a href="{{url('view_category')}}"> 
                    <i class="icon-grid"></i>Категории 
                </a>
            </li>     
            <li>
                <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
                    <i class="icon-windows"></i>Продукты 
                </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Добавить продукт</a></li>
                    <li><a href="{{url('view_product')}}">Все продукты</a></li>
                </ul>
            </li>
            <li><a href="{{url('view_orders')}}"> <i class="icon-grid"></i>Заказы</a></li>
        </ul>
    </nav>