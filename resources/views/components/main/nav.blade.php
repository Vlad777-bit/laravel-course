<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">TrueNews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('welcome')) active @endif" href="{{ route('welcome') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('categories')) active @endif" href="{{ route
                    ('categories')
                    }}">Категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('about')) active @endif" href="{{ route('about')
                    }}">О сайте</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('offer.index')) active @endif"
                       href="{{ route('offer.index')}}">
                        Предложить новость
                    </a>
                </li>
            </ul>

            <x-ui.dropDown />
        </div>
    </div>
</nav>
