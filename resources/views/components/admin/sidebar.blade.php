<div id="menu">
    <div class="pure-menu">
        <a class="pure-menu-heading" href="{{ route('welcome') }}">TrueNews</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item">
                <a href="{{ route('admin.welcome.index') }}" class="pure-menu-link">
                    Панель
                </a>
            </li>
            <li class="pure-menu-item">
                <a href="{{ route('admin.news.index') }}" class="pure-menu-link">
                    Новости
                </a>
            </li>
            <li class="pure-menu-item">
                <a href="{{ route('admin.categories.index') }}" class="pure-menu-link">
                    Категории
                </a>
            </li>
        </ul>
    </div>

    <div class="pure-menu">
        <ul class="pure-menu-list">
            <li class="pure-menu-item">
                {{ $slot }}
            </li>
            <li class="pure-menu-item">
                <a href="#about" class="pure-menu-link">Выход</a>
            </li>
        </ul>
    </div>
</div>
