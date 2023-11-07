<!DOCTYPE html>
<html lang="es">

<head>
    <title>HospitalDev | @yield('title')</title>
    <link rel="icon" href="#" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;600&family=Nunito:wght@400;600;800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS v5.3.2 -->
    <link rel="stylesheet" href="#"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="#">
</head>

<body>
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
                                <a class="dropdown-item" href="#">Personal</a>
                                <a class="dropdown-item" href="{{ route('patients.index') }}">Pacientes</a>
                                <a class="dropdown-item" href="#">Medicina</a>
                                <a class="dropdown-item" href="#">Géneros</a>
                                <a class="dropdown-item" href="#">Usuarios</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link m-0 fw-bold">Bievenido <?php // echo $_SESSION['user_userName'];
                            ?></p>
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
    @yield('content')
    <footer class="mt-5 py-5 bg-color-light footer">
        <div class="d-md-flex justify-content-evenly align-items-start text-center mb-5">
            <nav class="d-flex flex-column gap-2 mb-4">
                <a class="text-decoration-none text-black" href="#">Sobre Nosotros</a>
                <a class="text-decoration-none text-black" href="#">Contacto</a>
            </nav>
            <nav class="d-flex flex-column gap-2 mb-4">
                <a class="text-decoration-none text-black" href="#">Personal</a>
                <a class="text-decoration-none text-black" href="#">Pacientes</a>
                <a class="text-decoration-none text-black" href="#">Medicina</a>
                <a class="text-decoration-none text-black" href="#">Géneros</a>
                <a class="text-decoration-none text-black" href="#">Usuarios</a>
            </nav>
            <div class="d-flex justify-content-center align-items-center">
                <img class="img-fluid logo" src="#" alt="image logo" width="100px">
            </div>
        </div>
        <p class="text-center text-uppercase text-decoration-underline link-offset-3 fw-italic m-0">Todos los derechos
            reservados {{ date('Y') }} &copy;</p>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="#" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- My JS -->
    <script src="#"></script>
</body>

</html>
