<header class="mb-5 header">
    <nav class="navbar navbar-expand-sm bg-color-light">
        <div class="container">
            <img class="logo" src="#" alt="image hospital app">
            <a class="navbar-brand title" href="{{ route('index') }}">Hospital<span>Dev</span></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Administrar</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{ route('personals.index') }}">Personal</a>
                            <a class="dropdown-item" href="{{ route('patients.index') }}">Pacientes</a>
                            <a class="dropdown-item" href="#">Medicina</a>
                            <a class="dropdown-item" href="#">Géneros</a>
                            <a class="dropdown-item" href="#">Usuarios</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link m-0 fw-bold">Bievenido</p>
                    </li>
                </ul>
            </div>
            <nav class="navbar-nav me-auto mt-2 mt-lg-0">
                <a class="nav-link" href="#">Cerrar Sesión</a>
                <a class="nav-link" href="{{ route('session.login') }}">Iniciar Sesión</a>
                <a class="nav-link" href="{{ route('session.signUp') }}">Crea una cuenta</a>
            </nav>
        </div>
    </nav>
</header>
