<header class="header">   
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase">
                        <strong class="text-primary">O.</strong>
                        <strong>PIE</strong>
                    </div>
                    <div class="brand-text brand-sm">
                        <strong class="text-primary">O.</strong>
                        <strong>PIE</strong>
                    </div>
                </a>
                
                <button class="sidebar-toggle">
                    <i class="fa fa-long-arrow-left"></i>
                </button>
            </div>
            
            <div class="list-inline-item logout">                   
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input class="nav-link" type="submit" value="Выход">
                </form>
            </div>
        </div>
    </nav>
</header>