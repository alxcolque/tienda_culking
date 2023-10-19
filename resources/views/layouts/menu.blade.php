<header class="header-c" id="header">
    <nav class="nav-c">
        <a href="/" class="nav-logo-c"><img src="https://culking.com/img/sys/Logo9.png" alt="" height="40"
                width="40">Deportes</a>
        <div class="nav-menu-c" id="navMenu">
            <ul class="nav-list-c">
                <li class="nav-item-c">
                    <a href="/" class="nav-link-c active-link-c">
                        <i class='bx bx-home-alt nav-icon-c'></i>
                        <span class="nav-name-c">Inicio</span>
                    </a>

                </li>
                <li class="nav-item-c">
                    <a href="#" class="nav-link-c">
                        <i class='bx bx-notepad nav-icon-c'></i>
                        <span class="nav-name-c">Tienda</span>
                    </a>
                </li>
                @auth
                @endauth
                <li class="nav-item-c" id="themeButton">
                    <a class="nav-link-c">
                        <i class='bx bx-cog nav-icon-c'></i>
                        <span class="nav-name-c">Ajustes</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="item-menu">
                            <span class="item-menu-link">Cambiar tema</span>
                        </li>
                        <li class="item-menu">
                            <label class="theme-switch">
                                <input type="checkbox" class="item-menu-link">
                                <span class="slider round"></span>
                            </label>
                        </li>
                    </ul>
                    {{-- <a href="#contact" class="nav-link-c">
                        <i class='bx bxs-moon nav-icon-c' id="darkIcon"></i>
                        <span class="nav-name-c">Ajustes</span>
                    </a>
                    <a href="#contact" class="nav-link-c">
                        <i class='bx bx-cog nav-icon-c' id="lightIcon"></i>
                    </a> --}}
                </li>

            </ul>

        </div>
        @guest
            @php
                $dev = env('APP_ENV');
            @endphp
            @if ($dev == 'local')
                <a class="btn btn-outline-secondary btn-sm me-2" href="/login">{{ __('Iniciar sesión') }}</a>
            @else
                <a class="btn btn-outline-secondary btn-sm me-2"
                    href="https://cuenta.culking.com/">{{ __('Iniciar sesión') }}</a>
            @endif
        @else
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <small>{{Auth::user()->username}}</small>
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle">

            </a>
            <ul class="dropdown-menu text-small shadow dropdown-menu-end" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="{{ url('/users') }}">
                    <i class='bx bx-search-alt'></i> {{ __('Usuarios') }}
                </a>
                <a class="dropdown-item" href="{{ route('roles.index') }}">
                    <i class='bx bx-search-alt'></i> {{ __('Roles') }}
                </a>
                <a class="dropdown-item" href="{{ route('permissions.index') }}">
                    <i class='bx bx-search-alt'></i> {{ __('Permisos') }}
                </a>
                @if (Auth::user()->role == 'admin')
                    <a class="dropdown-item" href="{{ url('https://cuenta.culking.com/logactivity') }}">
                        <i class='bx bx-search-alt'></i> {{ __('Bitácora') }}
                    </a>
                @endif

                @php
                    $dev1 = env('APP_ENV')
                @endphp
                @if ($dev1 == 'local')
                    <a class="dropdown-item" href="{{ url('/categories') }}">
                        <i class='bx bx-search-alt'></i> {{ __('Categoría') }}
                    </a>
                    <a class="dropdown-item" href="{{ url('/products') }}">
                        <i class='bx bx-table'></i> {{ __('Productos') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class='bx bx-exit'></i> {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else

                    <a class="dropdown-item" href="{{ url('https://cuenta.culking.com/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class='bx bx-exit'></i> {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ url('https://cuenta.culking.com/logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                @endif
            </ul>

        @endguest
    </nav>

</header>
