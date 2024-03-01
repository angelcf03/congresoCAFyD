<nav class="navbar navbar-expand-xl navbar-white bg-white fixed-top shadow">
    <div class="container-fluid">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link"><img class="logoMenu" src="images/logoWpcem.svg"
                    alt="Logo" /></a>
        </li>
        <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWhiteNavbar"
            aria-controls="offcanvasWhiteNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end textoMenu" tabindex="-1" id="offcanvasWhiteNavbar"
            aria-labelledby="offcanvasWhiteNavbarLabel">
            <div class="offcanvas-header">
                <a href="{{ url('/') }}" class="nav-link"><img class="logoMenu" src="images/logoWpcem.svg"
                        alt="Logo" /></a>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link textoMenu">Inicio</a>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link dropdown-toggle textoMenu" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Congresos</a>
                        <ul class="dropdown-menu dropdown-menu-white">
                            <li>
                                <a href="{{ url('/congreso-1') }}" class="dropdown-item textoMenu">I Congreso</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
