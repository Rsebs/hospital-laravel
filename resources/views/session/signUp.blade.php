@extends('layouts.template')

@section('title', 'Crea una cuenta')
@section('content')
    <main class="container">
        <form action="signUp.php" method="POST" class="form-center" data-type-form="session">
            <h1 class="text-center mb-4">Crea una cuenta</h1>
            <div class="col-lg input-group mb-4">
                <label class="input-group-text" for="user_userName">Username</label>
                <input type="text" class="form-control" id="user_userName" name="user_userName"
                    placeholder="Tu nombre de usuario" required>
            </div>
            <div class="col-lg input-group mb-4">
                <label class="input-group-text" for="user_email">Email</label>
                <input type="email" class="form-control" id="user_email" name="user_email"
                    placeholder="Tu nombre de usuario" required>
            </div>
            <div class="row">
                <div class="col-lg input-group mb-4">
                    <label class="input-group-text" for="user_password">Contraseña</label>
                    <input type="password" class="form-control" id="user_password" name="user_password"
                        placeholder="Tu contraseña" required>
                    <button data-type-btn="show-password" type="button" class="btn btn-secondary">
                        <img src="#" alt="image eye" title="Mostrar Contraseña">
                    </button>
                </div>
                <div class="col-lg input-group mb-4">
                    <label class="input-group-text" for="user_passwordVerify">Verificar Contraseña</label>
                    <input type="password" class="form-control" id="user_passwordVerify"
                        placeholder="Verifica tu contraseña" required>
                    <button data-type-btn="show-password" type="button" class="btn btn-secondary">
                        <img src="#" alt="image eye" title="Mostrar Contraseña">
                    </button>
                </div>
            </div>
            <button type="submit" class="btn btn-success d-block w-25 mx-auto mb-4">Registrarse</button>
            <p class="text-center">¿Ya tienes una cuenta? <a href="login.php" class="text-decoration-none">Inicia Sesión</a>
            </p>
            <div id="alert" class="text-center"></div>
        </form>
    </main>
@endsection
