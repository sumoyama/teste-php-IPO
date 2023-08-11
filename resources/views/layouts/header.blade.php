<div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="{{ route('home') }}"
                class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 text-primary text-uppercase">EventX</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                <a href="{{ route('home') }}" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-primary text-uppercase">EventX</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Página Inicial</a>
                        <a class="nav-item nav-link {{ request()->routeIs('rooms.index') ? 'active' : '' }}"
                            href="{{ route('rooms.index') }}">Salas</a>
                        <a class="nav-item nav-link {{ request()->routeIs('Sobre') ? 'active' : '' }}"
                            href="">Sobre</a>

                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="me-3" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
