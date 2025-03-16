@extends('app')
@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg bg-white" style="width: 400px;">
        <h2 class="text-center">Registro</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input type="email" name="email" class="form-control" placeholder="Correo" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
        <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="text-decoration-none">¿Ya tienes una cuenta? Inicia sesión</a>
        </div>
    </div>
</div>



<style>
     .card{
        margin-top: -250px;
    }

</style>
@endsection
