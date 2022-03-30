<nav class="nav">
    <ul class="nav-list">
        <li class="nav-item">
            <a
                class="pure-button @if(request()->routeIs('welcome')) active @endif"
                href="{{ route('welcome') }}"
            >
                Главная
            </a>
        </li>
        <li class="nav-item">
            <a
                class="pure-button @if(request()->routeIs('categories')) active @endif"
                href="{{ route('categories') }}"
            >
                Категории
            </a>
        </li>
        <li class="nav-item">
            <a
                class="pure-button @if(request()->routeIs('about')) active @endif"
                href="{{ route('about') }}"
            >
                О сайте
            </a>
        </li>
    </ul>
</nav>
