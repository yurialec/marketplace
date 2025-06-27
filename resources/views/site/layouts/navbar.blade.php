<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('site.homePage') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-lg-flex justify-content-between align-items-center w-100"
            id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li> -->
                <!-- <li class="nav-item"><a class="nav-link" href="#!">About</a></li> -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">All Products</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                    </ul>
                </li> -->
            </ul>
            <div class="d-flex mt-3 mt-lg-0 gap-2">
                <button class="btn btn-outline-dark" type="button">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
                @if (!Request::is('login'))
                    <a href="{{ route('showLoginForm') }}" class="btn btn-outline-dark">
                        <i class="bi-person-fill me-1"></i>
                        Login
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>

@if (!Request::is('login'))
    <header class="bg-dark py-5"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/tela-widescreen.jpg'); background-size: cover; background-position: center;">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop homepage template</p>
            </div>
        </div>
    </header>

    <div class="banners-commercial bg-light py-4" id="banners-commercial-14028098">
        <div class="container">
            <div class="row g-3 banner-cards-78092816">
                <!-- Frete Grátis -->
                <div class="col-6 col-lg-2 text-center">
                    <a class="d-flex flex-column align-items-center justify-content-center h-100 text-decoration-none text-dark"
                        href="https://www.studiogeek.com.br/frete-e-entrega">
                        <i class="bi bi-truck fs-1 mb-2"></i>
                        <h3 class="h5 fw-bold mb-1">FRETE GRÁTIS*</h3>
                        <p class="small m-0 text-muted">Consulte as condições</p>
                    </a>
                </div>

                <!-- Desconto à Vista -->
                <div class="col-6 col-lg-2 text-center">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <i class="bi bi-currency-dollar fs-1 mb-2"></i>
                        <h3 class="h5 fw-bold mb-1">DESCONTO À VISTA</h3>
                        <p class="small m-0 text-muted">3% off no Pix ou Boleto</p>
                    </div>
                </div>

                <!-- Parcele no Cartão -->
                <div class="col-6 col-lg-2 text-center">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <i class="bi bi-credit-card fs-1 mb-2"></i>
                        <h3 class="h5 fw-bold mb-1">PARCELE NO CARTÃO</h3>
                        <p class="small m-0 text-muted">Até 5x sem juros*</p>
                    </div>
                </div>

                <!-- Cashback -->
                <div class="col-6 col-lg-2 text-center">
                    <a class="d-flex flex-column align-items-center justify-content-center h-100 text-decoration-none text-dark"
                        href="https://www.studiogeek.com.br/cashback-studio-geek">
                        <i class="bi bi-cash-coin fs-1 mb-2"></i>
                        <h3 class="h5 fw-bold mb-1">CASHBACK</h3>
                        <p class="small m-0 text-muted">Compre e ganhe</p>
                    </a>
                </div>

                <!-- Tamanhos Grandes -->
                <div class="col-6 col-lg-2 text-center">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <i class="bi bi-tshirt fs-1 mb-2"></i>
                        <h3 class="h5 fw-bold mb-1">TAMANHOS GRANDES</h3>
                        <p class="small m-0 text-muted">Até o 4G</p>
                    </div>
                </div>

                <!-- 1ª Troca Grátis -->
                <div class="col-6 col-lg-2 text-center">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <i class="bi bi-arrow-left-right fs-1 mb-2"></i>
                        <h3 class="h5 fw-bold mb-1">1ª TROCA GRÁTIS</h3>
                        <p class="small m-0 text-muted">Solicite dentro de 10 dias</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
