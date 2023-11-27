<!--====== Main Header ======-->
        <header class="header--style-1">

            <!--====== Nav 1 ======-->
            <nav class="primary-nav primary-nav-wrapper--border">
                <div class="container">

                    <!--====== Primary Nav ======-->
                    <div class="primary-nav">

                        <!--====== Main Logo ======-->

                        <a class="main-logo" href="index.html">
                            <img src="https://culking.com/img/sys/Logo9.png" alt="" height="40">
                        </a>
                        <!--====== End - Main Logo ======-->


                        <!--====== Search Form ======-->
                        <form class="main-form">

                            <label for="main-search"></label>

                            <input class="input-text input-text--border-radius input-text--style-1" type="text"
                                id="main-search" placeholder="Buscar">

                            <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button>
                        </form>
                        <!--====== End - Search Form ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs"
                                type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Cerrar</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    @guest
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                        title="">

                                        <a> <small>Iniciar sesión</small> <i class="fas fa-sign-in-alt"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a href="/register"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                                    <span>Registrarse</span></a>
                                            </li>
                                            <li>

                                                <a href="/login"><i class="fas fa-lock u-s-m-r-6"></i>

                                                    <span>Entrar</span></a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    @else
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                        >

                                        <a>
                                            {{-- <i class="far fa-user-circle"></i> --}}
                                            <small>{{ Auth::user()->username }}</small>

                                            <img src="{{ Auth::user()->avatar ? Auth::user()->avatar: 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png'}}" alt="" width="25" height="25"
                            class="" style="border-radius:50%">
                                        </a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a href="/profile"><i class="fas fa-user-circle u-s-m-r-6"></i>

                                                    <span>{{ Auth::user()->name }}</span></a>
                                            </li>
                                            <li>

                                                <a href="/ajustes"><i class="fas fa-user-cog u-s-m-r-6"></i>

                                                    <span>Ajustes</span></a>
                                            </li>
                                            <li>

                                                <a href="/publicaciones"><i class="fas fa-home u-s-m-r-6"></i>

                                                    <span>Tiendas</span></a>
                                            </li>
                                            <li>


                                                <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                <i class="fas fa-lock u-s-m-r-6"></i>
                                                <span>Salir</span>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    @endguest

                                    {{-- <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                        title="Settings">

                                        <a><i class="fas fa-user-cog"></i></a>



                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Idioma<i class="fas fa-angle-down u-s-m-l-6"></i></a>



                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:120px">
                                                    <li>

                                                        <a class="u-c-brand">ENGLISH</a>
                                                    </li>
                                                    <li>

                                                        <a>ARABIC</a>
                                                    </li>
                                                    <li>

                                                        <a>FRANCAIS</a>
                                                    </li>
                                                    <li>

                                                        <a>ESPAÑOL</a>
                                                    </li>
                                                </ul>

                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Mis tiendas<i class="fas fa-shop u-s-m-l-6"></i></a>



                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:225px">
                                                    <li>

                                                        <a class="u-c-brand">$ - US DOLLAR</a>
                                                    </li>
                                                    <li>

                                                        <a>£ - BRITISH POUND STERLING</a>
                                                    </li>
                                                    <li>

                                                        <a>€ - EURO</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li data-tooltip="tooltip" data-placement="left" title="Contacto">

                                        <a href="tel:+59160427039"><i class="fas fa-phone-volume"></i></a>
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                        <a href="mailto:info@culking.com"><i class="far fa-envelope"></i></a>
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Primary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 1 ======-->


            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">

                    <!--====== Secondary Nav ======-->
                    <div class="secondary-nav">

                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation1">

                            <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Cerrar</span>

                                <!--====== List ======-->
                                <ul class="ah-list">
                                    <li class="has-dropdown">

                                        <span class="mega-text">Menu</span>

                                        <!--====== Mega Menu ======-->

                                        <span class="js-menu-toggle"></span>
                                        <div class="mega-menu">
                                            <div class="mega-menu-wrap">
                                                <div class="mega-menu-list">
                                                    <ul>
                                                        <li class="js-active">

                                                            <a href="shop-side-version-2.html"><i
                                                                    class="fas fa-tv u-s-m-r-6"></i>

                                                                <span>Electrónicos</span></a>

                                                            <span class="js-menu-toggle js-toggle-mark"></span>
                                                        </li>
                                                        <li>

                                                            <a href="shop-side-version-2.html"><i
                                                                    class="fas fa-female u-s-m-r-6"></i>

                                                                <span>Ropa de mujer</span></a>

                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>

                                                            <a href="shop-side-version-2.html"><i
                                                                    class="fas fa-male u-s-m-r-6"></i>

                                                                <span>Ropa de hombres</span></a>

                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>

                                                            <a href="index.html"><i
                                                                    class="fas fa-utensils u-s-m-r-6"></i>

                                                                <span>Comida & Suministros</span></a>

                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>

                                                            <a href="index.html"><i
                                                                    class="fas fa-couch u-s-m-r-6"></i>

                                                                <span>Muebles & Decoración</span></a>

                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>

                                                            <a href="index.html"><i
                                                                    class="fas fa-football-ball u-s-m-r-6"></i>

                                                                <span>Deportes & Juegos</span></a>

                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>

                                                            <a href="index.html"><i
                                                                    class="fas fa-heartbeat u-s-m-r-6"></i>

                                                                <span>Salud & Belleza</span></a>

                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!--====== Electronics ======-->
                                                <div class="mega-menu-content js-active">

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">IMPRESORA 3D &
                                                                        SUMINISTROS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Impresora 3d</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Impresora 3d
                                                                        Bolígrafo</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Impresora 3d
                                                                        Accesorios</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Impresora 3d
                                                                        Módulo Board</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">INICIO AUDIO &
                                                                        VIDEO</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">TV Boxes</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">TC Receiver &
                                                                        Accessories</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Display
                                                                        Dongle</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Home Theater
                                                                        System</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">MEDIA
                                                                        PLAYERS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Auriculares</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Mp3 Players</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Parlantes</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Microfonos</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">VIDEO JUEGOS
                                                                        ACCESORIOS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Nintendo Video
                                                                        Games Accessories</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sony Video Games
                                                                        Accessories</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Xbox Video Games
                                                                        Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">SEGURIDAD &
                                                                        PROTECCIÓN</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Cámaras de seguridad</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sistema de alarmas</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">CCTV Security &
                                                                        Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">FOTOGRAFÍA &
                                                                        CÁMARA</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Nikon
                                                                        Camera</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sport Camera &
                                                                        Accessories</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Camera
                                                                        Accessories</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Lenses &
                                                                        Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">ARDUINO
                                                                        COMPATIBLE</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Raspberry Pi &
                                                                        Orange Pi</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Module Board</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Smart Robot</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Board Kits</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">PCS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">HP compaq Laptop</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html"></a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sony PC</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Lenovo Laptop</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">ACCESORIOS NECESARIOS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Flash Cards</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Memory Cards</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Flash Pins</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Compact
                                                                        Discs</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-9 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="data:image/jpeg;base64,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"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Electronics ======-->


                                                <!--====== Women ======-->
                                                <div class="mega-menu-content">

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwluX2DirTfNz77n16-cAFvpXJeFRvjjCXRJu3C_GYpORlO0MPcfDUyibkPkOkHMDMUN0&usqp=CAU"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP2mX5lOUJl_4lonPjY5ULeOO0SbIxmHKFMmEmr3E30l1eJ8u1WL3kK-e0Oh-AtG-Rd1w&usqp=CAU"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">
                                                                        CATEGORIES</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Dresses</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Blouses &
                                                                        Shirts</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">T-shirts</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Rompers</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">INTIMATES</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Bras</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Brief Sets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Bustiers &
                                                                        Corsets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Panties</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">WEDDING &
                                                                        EVENTS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Wedding
                                                                        Dresses</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Evening
                                                                        Dresses</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Prom Dresses</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Flower
                                                                        Dresses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">BOTTOMS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Skirts</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Shorts</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Leggings</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Jeans</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">OUTWEAR</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Blazers</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Basics
                                                                        Jackets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Trench</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Leather &
                                                                        Suede</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">JACKETS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Denim
                                                                        Jackets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Trucker
                                                                        Jackets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Windbreaker
                                                                        Jackets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Leather
                                                                        Jackets</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">ACCESSORIES</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Tech
                                                                        Accessories</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Headwear</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Baseball
                                                                        Caps</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Belts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">OTHER
                                                                        ACCESSORIES</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Bags</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Wallets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Watches</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-9 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRi-k486xiP5qMwGujI47foQIMv8vrY5ZwVe-ncOTvMbjqZDw0QNH6a1s56cn8vCNSqQA&usqp=CAU"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRml5K-8MAqYpsod9OT-L6FA_4thsLxxi-qbGr0_cV2qXgPWuPESLjju-XkdFvMsFqNN2E&usqp=CAU"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Women ======-->


                                                <!--====== Men ======-->
                                                <div class="mega-menu-content">

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdxPFbnPbgG0x6ha_baWacO4DGx_A__Lrrdbz6Vve0XSN5-IWfQxUA7g0GGTdU4rntfyU&usqp=CAU"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMXUyc_d5kIvlXpXLY8u55nCAsokYqyIyBoxLgHf_eacHZo63neI_pQEKXwE9Z8pfCb6I&usqp=CAU"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="https://tackapparel.com/wp-content/uploads/2022/11/Custom_T-shirt.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">HOT SALE</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">T-Shirts</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Tank Tops</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Polo</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Shirts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">OUTWEAR</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Hoodies</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Trench</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Parkas</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sweaters</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">BOTTOMS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Casual Pants</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Cargo Pants</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Jeans</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Shorts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">UNDERWEAR</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Boxers</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Briefs</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Robes</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Socks</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">JACKETS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Denim
                                                                        Jackets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Trucker
                                                                        Jackets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Windbreaker
                                                                        Jackets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Leather
                                                                        Jackets</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">SUNGLASSES</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Pilot</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Wayfarer</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Square</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Round</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">ACCESSORIES</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Eyewear
                                                                        Frames</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Scarves</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Hats</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Belts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">OTHER
                                                                        ACCESSORIES</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Bags</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Wallets</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Watches</a>
                                                                </li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Tech
                                                                        Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvQofQE30yflC2-mdilAAEbPS2Cp2BCPzTzjVBUcWQI3-X4xCXK_cxdvIUf8Z1J53wORs&usqp=CAU"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block"
                                                                        src="https://i.imgur.com/AtNeMiW_d.webp?maxwidth=760&fidelity=grand"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Men ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>Sin categorías</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>Sin categorías</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>Sin categorías</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>Sin categorías</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->
                                            </div>
                                        </div>
                                        <!--====== End - Mega Menu ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation2">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog"
                                type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Cerrar</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                    <li>

                                        <a href="shop-side-version-2.html">MÁS RECIENTES</a>
                                    </li>
                                    <li class="has-dropdown">

                                        <a>PÁGINAS<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:170px">
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>PRINCIPAL<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:118px">
                                                    <li>

                                                        <a href="index.html">Home 1</a>
                                                    </li>
                                                    <li>

                                                        <a href="index-2.html">Home 2</a>
                                                    </li>
                                                    <li>

                                                        <a href="index-3.html">Home 3</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Cuenta<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="signin.html">Signin / Already Registered</a>
                                                    </li>
                                                    <li>

                                                        <a href="signup.html">Signup / Register</a>
                                                    </li>
                                                    <li>

                                                        <a href="lost-password.html">Olvidé la contraseña</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a href="dashboard.html">Dashboard<i
                                                        class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li class="has-dropdown has-dropdown--ul-left-100">

                                                        <a href="dashboard.html">Administrar mi cuenta<i
                                                                class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                        <!--====== Dropdown ======-->

                                                        <span class="js-menu-toggle"></span>
                                                        <ul style="width:180px">
                                                            <li>

                                                                <a href="dash-edit-profile.html">Editar Perfil</a>
                                                            </li>
                                                            <li>

                                                                <a href="dash-address-book.html">Editar dirección</a>
                                                            </li>
                                                            <li>

                                                                <a href="dash-manage-order.html">Administrar pedido</a>
                                                            </li>
                                                        </ul>
                                                        <!--====== End - Dropdown ======-->
                                                    </li>
                                                    <li>

                                                        <a href="dash-my-profile.html">Mi Perfil</a>
                                                    </li>
                                                    <li class="has-dropdown has-dropdown--ul-left-100">

                                                        <a href="dash-address-book.html">Directorio<i
                                                                class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                        <!--====== Dropdown ======-->

                                                        <span class="js-menu-toggle"></span>
                                                        <ul style="width:180px">
                                                            <li>

                                                                <a href="dash-address-make-default.html">Dirección predeterminada</a>
                                                            </li>
                                                            <li>

                                                                <a href="dash-address-add.html">Agregar nueva dirección</a>
                                                            </li>
                                                            <li>

                                                                <a href="dash-address-edit.html">Editar directorio</a>
                                                            </li>
                                                        </ul>
                                                        <!--====== End - Dropdown ======-->
                                                    </li>
                                                    <li>

                                                        <a href="dash-track-order.html">Orden de pista</a>
                                                    </li>
                                                    <li>

                                                        <a href="dash-my-order.html">Mis pedidos</a>
                                                    </li>
                                                    <li>

                                                        <a href="dash-payment-option.html">Mis opciones de pago</a>
                                                    </li>
                                                    <li>

                                                        <a href="dash-cancellation.html">Mis devoluciones y cancelaciones</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Vacío<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="empty-search.html">Búsqueda vacía</a>
                                                    </li>
                                                    <li>

                                                        <a href="empty-cart.html">Carrito vacio</a>
                                                    </li>
                                                    <li>

                                                        <a href="empty-wishlist.html">Lista de deseos vacía</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Detalles de producto<i
                                                        class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="product-detail.html">Detalles de producto</a>
                                                    </li>
                                                    <li>

                                                        <a href="product-detail-variable.html">Detalles de producto
                                                            Variable</a>
                                                    </li>
                                                    <li>

                                                        <a href="product-detail-affiliate.html">Detalles del producto Afiliado</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Diseño de cuadrícula de tienda<i
                                                        class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="shop-grid-left.html">Barra lateral izquierda de la cuadrícula de compras</a>
                                                    </li>
                                                    <li>

                                                        <a href="shop-grid-right.html">Barra lateral derecha de la cuadrícula de compras</a>
                                                    </li>
                                                    <li>

                                                        <a href="shop-grid-full.html">Cuadrícula de tienda de ancho completo</a>
                                                    </li>
                                                    <li>

                                                        <a href="shop-side-version-2.html">Lado de la tienda versión 2</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Diseño de lista de tiendas<i
                                                        class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="shop-list-left.html">Lista de tiendas Barra lateral izquierda</a>
                                                    </li>
                                                    <li>

                                                        <a href="shop-list-right.html">Lista de tiendas Barra lateral derecha</a>
                                                    </li>
                                                    <li>

                                                        <a href="shop-list-full.html">Lista de tiendas de ancho completo</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li>

                                                <a href="cart.html">Carrito</a>
                                            </li>
                                            <li>

                                                <a href="wishlist.html">Lista de deseos</a>
                                            </li>
                                            <li>

                                                <a href="checkout.html">Verificar</a>
                                            </li>
                                            <li>

                                                <a href="faq.html">FAQ</a>
                                            </li>
                                            <li>

                                                <a href="about.html">Sobre nosotros</a>
                                            </li>
                                            <li>

                                                <a href="contact.html">Contacto</a>
                                            </li>
                                            <li>

                                                <a href="404.html">404</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown">

                                        <a>BLOG<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>

                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>

                                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>

                                                <a href="blog-sidebar-none.html">Blog Sidebar None</a>
                                            </li>
                                            <li>

                                                <a href="blog-masonry.html">Blog Masonry</a>
                                            </li>
                                            <li>

                                                <a href="blog-detail.html">Blog Details</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li>

                                        <a href="shop-side-version-2.html">VALUE OF THE DAY</a>
                                    </li>
                                    <li>

                                        <a href="shop-side-version-2.html">GIFT CARDS</a>
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation3">

                            <button
                                class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop"
                                type="button"></button>

                            <span class="total-item-round">2</span>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Cerrar</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li>

                                        <a href="index.html"><i class="fas fa-home u-c-brand"></i></a>
                                    </li>
                                    <li>

                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li class="has-dropdown">

                                        <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                            <span class="total-item-round">2</span></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <div class="mini-cart">

                                            <!--====== Mini Product Container ======-->
                                            <div class="mini-product-container gl-scroll u-s-m-b-15">

                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">

                                                            <a class="mini-product__link" href="product-detail.html">

                                                                <img class="u-img-fluid"
                                                                    src="https://west.com.ar/wp-content/uploads/2022/09/27eed09cfed5c697ff8de77faa504140.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a
                                                                    href="shop-side-version-2.html">Electrónicos</a></span>

                                                            <span class="mini-product__name">

                                                                <a href="product-detail.html">Auriculares inalámbricos amarillos</a></span>

                                                            <span class="mini-product__quantity">1 x</span>

                                                            <span class="mini-product__price">Bs 8</span>
                                                        </div>
                                                    </div>

                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->


                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">

                                                            <a class="mini-product__link" href="product-detail.html">

                                                                <img class="u-img-fluid"
                                                                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBQVFBgVFRcZGRgaGyEbGxsbGxoaGhohHRsbGxsaHRsdIS0kHyEqIhofJjclKi4xNDY0GiM6Pzo1Pi0zNDEBCwsLEA8QGhIRGDMhGCExNDMzMzMzMzMxMzMxMzMzMzMzMzMxNzQzPjMxMTExMzExMzEzMzMzMzMzMTMzMzMzM//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABAUDBgECBwj/xABIEAACAQIEAwQHBQYEAwcFAAABAhEAAwQSITEFQVEiYXGBBhMykaGx8AdCUnLBFCNistHhgqKzwjOS8RVDU2N0w9I1RHODo//EABgBAQEBAQEAAAAAAAAAAAAAAAABAgME/8QAIREBAQACAQQCAwAAAAAAAAAAAAECESEDEiIxQWETUZH/2gAMAwEAAhEDEQA/APZqUpQKUpQKUpQKUpQKUpQKUpQKUpQKUpQKV0ziYkT05+6u9ApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApXBNefemX2hJYBt4XK9wyM51RepH4vl40G7Y3iFqzl9a6pnYIgJALMSAAo3Jk8q0z0h9P7FtW9VdS4wJXJbft6GCWLABBPST0mtCu37mY3Lrm5ecDOzyWG5yryVRMZQI0JG9Q7mPvgEB2AJkgMQCd5gDedfOqOOK8duYo9tmUTIVFMT1LQSx7yfCK68Nu425cFrDYm+X5IlxwYHMjMAB3nSsGIxt59HCP+e3bY9JzMsyOWtdDdvG56y3NrTT1TvbCaQcsNI7+VEeo8CwXEbS58TjXgfdOQqPFnUsx7hHnVtwL0hNzFHD+s9YMrHMcisrKV0yqBoQxOuoy9+nkeN9J8TfVLSM10ogQuxaGgntO27trBOxgaHc8YHhVy2y3Xdg66qVOXJ+SPZ8RTQ+i6V4vw/wBP8ThnAdjft/eVtXjmVc6z+YkeG9et8NxyX7SXrZzI6hlO2h6g6gjYg6ggioqbSlKBSlKBSlKBSlKBSlKBXRzAJ6V3rqwkRQalw70ivXnPYFpPWG2mYFs7ZM4kQvYIDDMpPaQjbfY+HYxbttbi6TMqYlWBKujR95WBU96mvMsP+03VF5EFso7K9xsmQokj92GhgxI1ZjAHI61VY/EPeVv31023YuwRsqOWgZiAAIOmm3dQemcU9M8BhyVuYhCw3VJuMO4hAcvnFUd37WOGqYm6e8W5HvmvNk9H7ZMgOwHdmA8gsCsv/Y+HglbgbxzKOWpYgADXcwKlqyV6Ev2ucM5tdHjbb9KzJ9q/Cj/3zjxtXP0WvO8RwC2iPcFy06p7Xq7gaCY0nY78jGhFVbYexzzDyqo9htfaXwlv/uQPFLg+a1Nsem/DXIC4u0STABaCSdhrFeIpw6y5hTJ6QP1irPBcIt4f94QM50QECV6t4n5eNBt/pn6WNcJs2TCbMdi/j0Xu58+lefvpcVzyg+41LcyZrE6T5VYMmJdTyHuFRgk7D3T+lSUAH3QT36/CuWk6E6dNh7hVRG9TG58t/r31IscNNzQgleh292x85qfgOHZtTtUjG41ba5E3oMeW1ZWBE1V4rFs/hWO5cJMmsDtVGK6s1uf2Veknqrpwdxv3dwl7ZJ0RwJZZOgVgJ5dodWrz7iHEbtrK1p2RifaU5THjyrJwvi0u37SSzO0l9yDrIaN1IkeJnWIOaPpe3j7TezcQ+DKf1qTXz7i2ui21zD3FRGJDAMpzzGUuxWCToIPLUxOUQsDxzH4VGtKMRYbMIgqLQJZYB9YjZVA554PMamoTeuX0hSvMuEfaBeQW1xFpnVmyesL2EdjE5lAcW3Go9kj73SD6Bw7iFu/bF204ZGmCOoMEEbgg6EHaiptKUoFKUoFKUoMdxwoLMQABJJMAAakk8hWhcb49cxJNu0WS1qCwOVmHNyd1Tu369Bx6d8dm5+yI0KgD3u8mClsxsIIY9ZXz07EcWZrJt2SA4ZGJPVXzKh/5D4ZfKgsOKYaxaVRdd7uRQEW67sqgbD1QaB0BOsDYGoGF48l0+qu/urWY5WtnKpfISMwuFhssAzoWG0kjWeIWr9wl2MCQJcqmrbAKGYkmCY6AnYGsWGYMR6w6KIAA5CTCrz1JPiSSedWCdxAM7G2LhZVP3T2HjZgpka7GN43IANdxg3KMoZgG31kbkxBmZk6GemlZ8Mi63bkInIdByHeefeSdpqtxvpER2bSj8zfoKDAeC3lbsrbHRislfBSCB5VmvlQ0ZiYgAse0YESe87+dUuK4hceS7secTA9w0rbsB6KH9iGLa8VYx2BbUrqRpqQWhWB7PfsATRHTAOqrKFS7EKBodzrI8JqbieEYy4r3hLIri2TmTRjlAAXIJEuo061rvB8i4km6y28hKnMQold4Le+vVPRz0jwVtLVhrlsqxd7hmVVw6ta12Oi8p1Aorz+/wvGW82ZWGRgj9kMEZoyqSukmR76i3Lt1CVdII3DAqR4jU/Ct94dcs3jYlkz4jGPiLvaXMiW8zIj69kEqsA9T31K4hwjDYrFhyjOjYdsWWVn9ZfzNCW1UaAKIEKM2qCd5bHnK8RA9pSProYNWXC79m48F1U/hY5SffvWw8Q9DsML1wlrlu3bwq3ntofWOjsxC2wWEuCEbQwSY11rTPTfgtvB4v1Nti4VVJLBcwLCSpgQdIM/xd0m7RsXFeIpbHq0Ye8Vr7XgdSR76NaXKCoA05QKwkRQZ0Utt8NflWQ4U/dVie8FFHiWEx+UGuOFcNuYm4bdtkBCliXbKoAIG/mNO+suOw1zDXTaZjIg6E5TKg9e+D3g0FFx3CMgDEBo3BBCgHSYmZHUnvgbVVwG1WOuUmNT2tGOhGgMGDrzrc2Vbgh1nTcaf2qov+jUHNacRr2W5bTqPLlFRUbA3WtDsMyPGgko22USDBg67Va4Tj95LgeLbMAQHa3lbKWCgSuUkSTpMa91V9/A3kEMjFdTAUOuo0YrqIBjWumBALrHZMoBlLKRIJYxMaN3c6I2DF8SC9sW0ViSZFx4OrASueGEA9kgga6Ca9I+ybDqmCZhlm5dZyq7L2UUCOWig+Yrym5hyVXM7xlBAzAASWESFnQRz+8ai4W9cS4jWXKZILEMwaDGzblhPP+tFfTVKpfRbjS4zDJfC5c2ZSszDKxRoMCRI0MDTkKuqgUpSgUpWDF3Qtt2OyqSfIE0Hz9iOKG5iMRdJnPddh+XMQg8lAHlUO/i1QOy21dmI1JYFYkNBVhurEHyrrwfGm0qgWxcYrnaWygbwB2TJOVj5d9TcVxMHexl3+8CBByk+yNjpVFA5e42ZhkUFjEsfbyg+0TBhYJmTUiw6p7Ik/W551xiMQzbIekZk8I3+pqPhbwLQQQeh5+6qiTjHZ4zGeg5DyqudasbvuqFcQnb686ghssyK3PhnpstrDepuKcwCgNlzAhAsKJbSVQLsN9Tu1aY15VMTJ7tv70xJzZQBqxgeP186C1xdtsTbuYgjKC5YCSxkkmJJliFgSd4qmucMcbQ3eNvlW9LhMiJaDIoURLMqqWPtH66eFR3tWQNb9vYwAHad+ixuPj3VNq0j1dxebDwJFZLPEsQhDJcdWGxDEEeBGora8PZs3J7YEfjIUGTy115865xXASFLqiusaFWJzHmFiQSNtxvQa/h/SXFoWIvP2yGaSTnKmVLdSCNJrpjuO3b1w3bvadvabYmAAJ8gB5V2xmERD20dPcR4Tt8ahNh1PssD8DVRdYf0iTKFdW05gg/CpmH4hZuGFYg99aqbFcouUyJkbdKo3i1euYdvWW3yNETCnfSIYEbxvsYO4rjiFy6bhN5md8qtLkklSodIJ1AIYEDTfaoK3zesFfvAaeIII+IFXXEeLC/asLlhrSFSSGDEGMqmRHZCgDKSNN6CPYxSAamO+spxCt7LA+BqmvtEd0j+h9w+NQXcz18daDdcNdI+U9P61gxeCtuMwAU8uYPjz+uda5heKMmm68xMx4TVo2NzAEGRQY8QABEajz7uXzqEiXLdxiUYgDtQM2UTzIkA6HfoelZ79w+0Z02j4Vu/oli7j4N2w7BbyXi+VJLPKkhSs6gK+inTs9ags/sZ42l2xdww9q05cH8S3CWnxDSD4rXpdea+jGNe5i7F2+ttMU3rsM4tgD1qKq3BcJB2DWwB0zR4elVFKUpQcVC4smaxdHW2496mp1Q+LGLF0/8Alv8AymhLp4FgODK8XEL7QGtliYMkAhd999q6Y/BMAQbh5iDk5tnPLrVTgr962A1tyojUcqyXvSLEn2jPmax5T7emTo5c91n1pw+HuE7OZJMhdNYO+WOVZbHDTOZ2C97MNBM6BRHvqsvcYunn8zUC9euP7TEj4VfK/RfwY+rbf5F/i8fhregm63f2U93P41RY3iFy8wEabKqjQdwAqw4f6OO8Nc/dp3+0fBTtPKfca2bCYG1ZBW2oBjViQWJ29ref4QP8NamLlnncuJNT9RrvC/RxjDXTkG+UavESTGoBEjfUTqNKvsNgLNvLlU5ivtQSx7157GJHZ75iJBfMREklRoApI2IJUkhe4sW7gKwgAgHsxrP4eY1fd/5fhWnJwVtnUyBrJhSBvoSdNxqBIJ1MnWo+Is7FRIP4hBY/l3gch3TpsJEEQe/QnbXYKsaf9N6C2dzoCYk+23cOnWOnIUEa7w8gZmTT8SkMJ7yDp0jw6iuMMj2zntOQRGxMnmBG/wDzadRzqZ6oRJ7K5vFidNNzr7zHSu9rDgHMxZFB0MEkH7ugOmsaTOo0oISu5JDHMTuH135T/t8dIqDxDgdtgWU+rO8R2ZPLTToAQBOug2q/u2QJVsrAAmVPYbWZYnlvrHflOhOJ7WUmZaJlo9juEnWOcSRBnkBNK0K6HttluA+fTqKFtJGo6/oa9BPCLWItlSZdRnWSNgJLBpBafwKNtdK0bHYQ2bjKJiJg7MOcHnHvoJvA8TD5eulX0SctsM7AAsEUsRJYBVCglj2STtuBqa07DvldWB0O39D31vfBsXcsesNuCL6ANJErJZuYM6u4IjUEbRrUU+IUE9x/6z9dBUB7B8fMfpVtjLcD3D4gVhtcJu3E9YGtqmYrrnZxD5PYRGYjNA7IPtL5BWm2fwkeRqbwoySp8RPxrIvAbpkq9ogXGtSGdQbilAEEoJLZxlO2jSRzWMJctXVW4VOYOOy2YBkOV0bTRlO/iIJoJuMRfVkaE/361W4PEXLedbblQ5Rmjm1tsyMDuCD086sMcNIquBAoJ/DeP3LOPtY287XCrdssSTlYMjx4KxIUaSK+jkcEAgyCJB6g7V8t4sSsbz3eOlfSXo1dDYPDkMGHqU7Q2JCAHfXcGpVW1KUqBVZ6RvlweJbpZuH3W2NWdUvpiY4fjP8A017/AEnoPDeEWwbetYcXgVO313VK4UP3f18fdXdklhIJ6KNWP9B391UVWE4Bcut2YVPvO0QvlIn5bSRWy4DhuCwoDEm441LxMflkhB5Se81UY/i4Xss4WNrdsZiO4kaKap7mODbI572YKf8AKDRG44jj9oewg82y+PZVYqtxHF1YTkHfHLxZ1VfcTtWth5+44/8A2E/7a7r1DOOmYAj3iTQXS4m23OOmaYPgT2T5VOWyTqRMbd2+sbE68orXFV5mA880OVz3b9rwk+FTeG4llMWzMb2ysMO4JoG/wZT/AAtV2LhMG2hQZm3Y816jL390DvNcWlkyupn2225bCNemkLzmp/DcdbvQD2H5a6EjcI0AyOasAw5ipWKwStGbSJPZChXPIMJABnmdPCAaCqt2wT2O2xMZyZHLRevgsL3zXAUT+NwYnQKvUAjzEKJ01POstwMAPWSikxk1lu46Bn2mAI1O4FdXaQJ7CT4MegLD2e4LrtrJ1DFcEEyZfNqoEZdBr/COclpOvlxiUyqpMOhEqQRkUx7LaaREwZjQgQezjNyBCjIupmO0d9Qh0XeZaT3VEuXWKwubIO1qSQT11PaPf007qBcco0gk6mSBARp5a9SZ1MHeOUbjjftOZn9smQ38XdrMePdXOckBWB27KxAYd/UfWpmueH2S9wWsyoSdGJ7tFk7GdJPce6g1N7DoYcFQTvyBHP65V6N6NcGa9hLl0uqnDjVTuw1Oh5d3UmK1fHBLilVXQ/eMlieRM/XyrPwLFnILbjVWyT3jYHuIPwNQT+IW4XzX+ZahpxG9aVURgoRxcHZUmQ5uCSeQeD10HSrHiSwvmD3e0Dz8JnpVVfWaQRsJxG7Zt+rRlyBi4DIrZXISHEjRlyCDy1rNYx1y7eQ3MsjN7KhQS5LO5Gssx3PcNKh3EPf9RWXhSH1q6dfkaotscvZ86rmjXxPzNWmOGn19f9KqysknozfM0GJ918R8695+zJWHC8Nm5hyPA3XK/AivAcVMeVfS/o2sYPDAf+Db/kWpRZ0pSopVJ6Z//TsZ/wCmvf6T1d1T+llsvgcUgiWsXFEmBLIyjXxIoPC8HcC2ixYKFEs5mEHgNSx2CjUnwJFBj+MvdJS1mS3zM9t+92H8o08d6xcax3rWW1bP7pDA5Z22a4fHl0WOZM8WUCLJ+u6qObOHgf3rJbuZiVQMx55RIHidh76xlMwz3JCfdtgwXjqeS9/u610bFXH7KwqDYKIQeA5nvM0TcS2R+ZQeNyT/AJVIrrlP4lPg39QKwJY66nvqTbtihKxsWXXUd/L37GpaYpLgC3Zkey66OvmdGH8Lad61kt26wYnBc1939KCw9cykLeKktol8BilzLsl0DtZhpDDtoSCJFXvBvSBLgyu2ZScqudCG5I4gbx2XgZtjDCK1ThuPyEK6q6SJRxKmNpnaOTcvCQZPHMGts/tOHANthldDoI+8pA2iPeARtNFbVj1ymQAWjKuaRzkKT0BJIHl4VL3Ibm7+OizyjZRry1iN6jYDi3rEyMc2nZJ3Zdu1/Eux8jzrh7hIImPxHrPPz5/3qoO+vaOZuQ5fXefhXDud2Mfwg/P699Ylb8Gg5sfr67q6qQNtT1qhj8WSEkEFQQIIUZeS6CZExJmBHlHxiZkicojTrHWfj5VOsKmdDcGcZgW1gBdQSTtAmf8ADWF7JRnQiMjEdCROmknfXUToNzuYOOEWgba3S6oyXJbORBCgFoSZYghjGxBgkGAY+KxKNfvPbkK8tBMnMpEnbQEOTGsbSd6xW0K58rFWEOhBIbMQyhgRqDnQGR1pj0ktc1zMGnYb231gbEtyHQVBn/7cRnNtmNuCVDQHUwYBMjMJ/wAVZsSjLvlYESCAIIOxBWNK13h1+A6MqsjDUECQeTI26sO4wdiCNKs+GK6+ssvvb1HhIHuMg1YO1xSVJBMDcTqOnkacKP75frlUpABmB2Kt8ASPiBUThGt7wB+VBb459On/AFqtLHtdJPzNWGMqtHP8zfztQYMQpfsjnoOmulfSHonjEu4LD3EBCm0ogmSMoykEjeCpE184o37xfEfMV7/9m1srwzCzzQt5O7OPgwqVW00pSoFeb/bVxz1GCWwphsQSp65Fgv75A869Ir54+2vHm5xH1c9m1bVQOhbtN8x7qDSeH2+dXOEwmeXPsLIHfHtH/aPOq3DHKhPQTW83eHeqspb5qoB7zEsfNiTUt0xlWoYpGuOFG7EKByHIDuAqY+EFsRyHxq19HMB6zEMSNERm8yQo+DN7q449YgkVLlpwyz8pi1jEYg7LUb1jdTUm8kViS1NZ7neMtjFXF2Y+eo9xq7wOLW5CsMrnb8Ld3cfruqkS1Uy1amrs3pI4lgSJcDUe0P1rrgMV2Sp2jUdRtm8R8vy1svCbXrrZnV7cT1ZToG7yNie9dyTWs8Uwpw96AOz7S9CDoVPxEdI61uXbXvlX62rkLsTmXx5r5jT3dKuVuDR91I1/KaruI2JSV+7DKecaFfOCAe+alcLbPbPkfJp08mVveK0JroZM6AHauvwG1ZSOwjEywlI6Zdj36EV0I6+Q5d1UcIoOkQuxPUc/r51isEyZMkzJbcmRz66tWfnr02+NYp7Z1GrbxI1Vjrp1+MUEdWHrlBIGdXXMdgFCXB8cw/xVzjVfIZUqGRisjVhlYTPMT0rthrPrL6IPvBxMTuEExzqTx3iQW3kdla4jFRoCcqEooYzzYM5AkGSZ5VBp9hshM6GrOxjiXe4d2AUeACgfBRWROE5xMGUth7hneWtg+YN1BHfUHhi5mM9P9yj5Ggm+sJBJ5iPLn7/rcVn4D/xGPd/Ssd8aRWTgPtt4f0oLPFGar1282/nap98VDVdPNv52oK/HNCmNNNIr6l4dZCWraKAFVFUACAAFAAA5CvmDFpPZHORPv2r6d4Xi0vWbd1JyXEV1nQwygiR1g1KqbSlKgV8v/aUSeKYon/xAPcqivqCvmf7VMOU4pif4ijjwZEPzmgpbCBgqnZmVT4FgD869U45a3868mQyhjcCR4jUfKvXOI3g6BxswDDwYSPnWc2M/hV+hlsetvjn6sH3N/cV14/hJJNYPR/FC1jADtcVrfmYZfigHnVpxW8JNZynDx5cdTn5ec41INSuFYI3Ld1gP+HBbwbQfEV14pGY1DwuMe0WykgMuVhyZZBg+YB8qzp7MasLSJkGvazGR3aRUq4gTLGzCfA7H676o/wBp1qUmJLESdtBUsqVufoppeTo37s9+cZR/mynyqs9OLQgHnbb4NofiFqw9EWm9aH/mKfcwJ+Arn03s9lm5FT8NR8qdPLnS4etNW4eM9sjmsr5HtL83Pgo6Vj9HxDsh5F18JX1i/wCmw/xGu3o+wzkHmBHix9WP9Q++u2AOXGEdXt+5nCH/ACua9DS1KHI4AGjK09AQVPxCios9PjUu4R25BPYBEdQ4/rUFm+HwrQ7BvlzrAX7R5R012BH6/GuzPUIPufHn11IPuFBivXe0x10U7bksQI8YU++oXFXzuNFDMFkKMqyFCyANASZY97UbE6MwOpb4DTTx199Y8GC91Cebr8xpUG05bmIcWbT2UNqVy3HFtrs3S5VGYFZARBJKnTmJrXeH2Gt3GBiQIMajR1BHfXdLg9e7z2u2QP4sj5PjFTLtxHbMkkbTp7MJlHcezUHS8KycD0uN+X9RWNzWXhI/eN+X9RVE/EfrUJDofzN/MRU3EDbxqEm3m385oI19oYaTv7zMAeZr6Z4DgTYwtiwTJt2ktkjYlFCk+8V85cJwhvYzD2lEl7qCP4c4Zz4BQT4Cvp+pVKUpUCvCPt04dkxdq8Bpdt5D+a23/wAXX3V7vWj/AGs8D/auHuVEvZPrV6kKCHH/ACknxUUHz9gHkRW78E4jmwyoT2rfYPgvsH/lI9xrz7CPDRV1hsV6ts/3WGV+78LeUx4GjGeO4s8fdIYMpgggg9CDINWWJ4iLtsONzuOh5j65VRYm5NQrWLNsnodx+tXThn0+7V+YyYt9arnNWF+HEg1X3LTDlPhWLi7Y+nCmpWHaoio/JW9xq24bwxmINw5V6Agsf0Hn7qzpdNx9CkIzXTsAUTvZhDR+VSfNhUj01Yfs7HnsPOuuBvABVAhVEKBsB9c6pfTLiGfLaHIyfH+23nWMcfJZNKbgph56ZD//AHs11smcYD0NufK7bJ+Vd+HQqux/gUeJb1g/0jUTAXJuu/KfkCPmRXoVe3LvtaxoB4yZj4fCoL3PrlXD3dPE+cDTy51GL/XTv/vWh2v3YE8zt/b41CuPoFGpP1r8q7SXbTYbb93ann/asyWQO8nc9agjJaEjNz/ppWW2FS4uugZT8RXXECo74G40ldR4gH40C+5t3c2UNDBtRoYO09NPjVgIgZduX9frrXFq+4HbhTHUSdI5Gj3F/EPeKDg1K4SvbY91Q2ur1HvrmzjQuxiaC4xB1HjVXeu5QfEn3kmsyPcvMtu0rvcYwqIJJ66Dl1J0r1L0I+zQWmXEY2HuCCtnRktnkXOzuOg7I79CIMf2QeizWw2NvIVZxlshhDBT7VyDtm0A5wDyavVKUqKUpSgV0ZQRB1BrvSg+ZftG9FzgcWwURacl7R5ZSdU8VOnhFUeEvAiD4EV9L+l3o7bx+HNl9GGqPzRo0PeDsR+oFfNvGOE3cJee1cUq6GCOR6EHmDoQe/wqjq7FNN15H/af0qPdYGpOHvBhB16g1iv4FhqhkdDv5HnRjtRVvFak28WKhMYMMCp8K7LaB2IPnFRdLeziB3VOtYsDnVHbwg5mP8QH61JsFFPZ7R7tY8WOgqNNhHEMqzt8/KqO85dixo7MfaPkNh/Xx+VZsLaU5rlz/h24LwYLTOW2p/E5BHcAzfdqyaR1x131dtE5kesP+MAWx/yjN4XaiYLsrHM/R+u6sGJxD3Ha451YkmNBPcOQGwHdVnwfht29cW3aRndvZUDlzYnZR/ESB31odLr+4VtPor6A4rGlXcGzhzqbjDtuOiKdTP4zprInat89EPs1tWIu4vLdu7hN7SHloR22HUiOgnWvRam1eWYn7G7P/dYq6nTOiOB5LkqoxX2PYsf8PFWn/Ojp8Rnr2qlQfPuL+yviq7C0/wCW7H86rUEfZrxg6fs4HjdtR/PX0hSg+ebX2RcUf2vUr+a4T/KpqUn2LY8+1eww8GuH/wBsV75Sg8GP2K43liMP77n/AMKlcP8AsUvlh67Eoq8/Vqzk9QM2UDx18K9vpQUXo16L4bA28lhIJHauNBuPH4m/QQByFXtKUClKUClKUClKUCtS9N/Q9MfbBByXUBysfZIP3W5x0I2k7gkHbaUHytxrgN7DXGt3UKOOR2I5MDsw7x89KiW8SRo2lfUXGeDWMVb9XfQOOR2ZT1VhqD4V5b6Q/ZVdWWwrC6v4HhLg7g2it/l86o84LKwggHxE1iODtn7vuJH61Nx/A7lhouJctGYh0InwnQjwqMLBH31HjRGNcLbH3R5yfnWUkVyLI53BH8KFj8xUvAYf1jZLFi5iLk/eBZRPM27Y2/OYoMGHw+ZTcZgltdGdtRP4VG7v/CPMqNahcRxouFbaKUtIeyhMsSYBdzzdtO4CANAK9J4V9l+LxBW5jLotAABUAV2VfwqqkW7Y6Rm8K3/0d9A8DgyGt289wGfWXYdweq6ALv8AdAqK8v8AQz7Mb+Ii7ic1i1yUiLrj+EN7A72E6bQZr2jg3BMPhE9XYQIOZ3Zj1Zjqx8TVnSgUpSgUpSgUpSgUpSgUpSgUpSgUpSgUpSgUpSgUpSgUpSg6MgIggEdDqKq7/o3gnMvhrDHqbaT8qt6UFLb9FcApkYTDg/8A4rf9KtbVpUEKoUDkoAHuFZaUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUClKUH//Z"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a
                                                                    href="shop-side-version-2.html">Electrónicos</a></span>

                                                            <span class="mini-product__name">

                                                                <a href="product-detail.html">Nikon DSLR Camera
                                                                    4k</a></span>

                                                            <span class="mini-product__quantity">1 x</span>

                                                            <span class="mini-product__price">Bs 8</span>
                                                        </div>
                                                    </div>

                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->


                                                <!--====== Card for mini cart ======-->

                                                <!--====== End - Card for mini cart ======-->


                                                <!--====== Card for mini cart ======-->

                                                <!--====== End - Card for mini cart ======-->
                                            </div>
                                            <!--====== End - Mini Product Container ======-->


                                            <!--====== Mini Product Statistics ======-->
                                            <div class="mini-product-stat">
                                                <div class="mini-total">

                                                    <span class="subtotal-text">SUBTOTAL</span>

                                                    <span class="subtotal-value">Bs 16</span>
                                                </div>
                                                <div class="mini-action">

                                                    <a class="mini-link btn--e-brand-b-2" href="checkout.html">PASAR POR LA CAJA</a>

                                                    <a class="mini-link btn--e-transparent-secondary-b-2"
                                                        href="cart.html">VER CARRITO</a>
                                                </div>
                                            </div>
                                            <!--====== End - Mini Product Statistics ======-->
                                        </div>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->
