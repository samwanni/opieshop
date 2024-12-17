<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{url('/')}}"><span>O.PIE</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#product">Ассортимент</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#why">Почему мы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contactsection">Контакты</a>
                </li>
            </ul>

            <div class="user_option">

            @if (Route::has('login'))
            @auth

            <a href="{{url('myorders')}}">Мои заказы</a>

            <a href="{{url('mycart')}}">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                {{$count}}
            </a>

            <form style="padding: 15px" method="POST" action="{{ route('logout') }}">
                @csrf
                <input class="nav-link" type="submit" value="Выход">
            </form>

            @else

            <a href="{{url('/login')}}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Вход</span>
            </a>

            <a href="{{url('/register')}}">
                <i class="fa fa-vcard" aria-hidden="true"></i>
                <span>Регистрация</span>
            </a>

            @endauth
            @endif   
        </div>
    </nav>
</header>