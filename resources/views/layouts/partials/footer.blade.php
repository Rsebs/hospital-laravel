<footer class="mt-5 py-5 bg-color-light footer">
    <div class="d-md-flex justify-content-evenly align-items-start text-center mb-5">
        <nav class="d-flex flex-column gap-2 mb-4">
            <a class="text-decoration-none text-black" href="{{ route('aboutUs') }}">Sobre Nosotros</a>
            <a class="text-decoration-none text-black" href="#">Contacto</a>
        </nav>
        <nav class="d-flex flex-column gap-2 mb-4">
            <a class="text-decoration-none text-black" href="{{ route('personals.index') }}">Personal</a>
            <a class="text-decoration-none text-black" href="{{ route('patients.index') }}">Pacientes</a>
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
