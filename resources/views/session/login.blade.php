@extends('layouts.template')

@section('title', 'Inicia Sesión')
@section('content')
    <main class="container">
        <form action="login.php" method="POST" class="form-center" data-type-form="session">
            <h1 class="text-center mb-4">Inicia Sesión</h1>
            <div class="row">
                <div class="col-lg input-group mb-4">
                    <label class="input-group-text" for="user_userName">Username</label>
                    <input type="text" class="form-control" id="user_userName" name="user_userName"
                        placeholder="Tu nombre de usuario" required>
                </div>
                <div class="col-lg input-group mb-4">
                    <label class="input-group-text" for="user_password">Contraseña</label>
                    <input type="password" class="form-control" id="user_password" name="user_password"
                        placeholder="Tu contraseña" required>
                    <button id="btnShowPassword" type="button" class="btn btn-secondary" data-type-btn="show-password">
                        <img src="#" alt="image eye" title="Mostrar Contraseña">
                    </button>
                </div>
            </div>
            <button type="submit" class="btn btn-success d-block w-25 mx-auto mb-4">Iniciar Sesión</button>
            <p class="text-center">¿Aún no tienes una cuenta? <a href="{{ route('session.signUp') }}"
                    class="text-decoration-none">Regístrate</a></p>
            <div id="alert" class="text-center"></div>
        </form>
    </main>
@endsection
