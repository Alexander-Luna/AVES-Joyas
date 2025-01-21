<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> 0967126947</a></li>
                <li><a href="#"><i class="fa-regular fa-envelope"></i> guachivivi@gmail.com</a></li>
                <li><a href="#"><i class="fa-solid fa-location-dot"></i> 9 de Abril y 10 de Agosto</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa-solid fa-user"></i> Iniciar Sesión</a></li>
                <li><a href="#"><i class="fa-regular fa-user"></i> Registrarse</a></li>
            </ul>
        </div>
    </div>
    <!-- MAIN HEADER -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option value="0">Mostrar todo</option>
                                <option value="1">Category 01</option>
                                <option value="2">Category 02</option>
                            </select>
                            <input class="input" placeholder="Buscar...">
                            <button class="search-btn">Buscar</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Lista de Deseos -->
                        <div class="wishlist">
                            <a href="#">
                                <div class="icon-container">
                                    <i class="fa-regular fa-heart"></i>
                                    <span class="qty">2</span>
                                </div>
                                <span class="text">Mis Deseos</span>
                            </a>
                        </div>
                        <!-- Mi Carrito -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="icon-container">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="qty">3</span>
                                </div>
                                <span class="text">Mi Carrito</span>
                            </a>
                            @include('layouts.components.shoping-cart')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
