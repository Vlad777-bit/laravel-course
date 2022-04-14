@guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Вход') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Выйти') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            <a class="dropdown-item" href="{{ route('account.index') }}">
                {{ __('Личный кабинет') }}
            </a>
        </div>
    </li>
@endguest
