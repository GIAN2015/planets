@extends('app')
@section('content')
@guest

     <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg bg-white" style="width: 400px; ">
            <h2 class="text-center">Iniciar Sesión</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control" placeholder="Correo" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
            <div class="text-center mt-3">
                <a href="{{ route('register') }}" class="text-decoration-none">¿No tienes cuenta? Regístrate</a>
            </div>
        </div>
    </div>
<style>
    .card{
        margin-top: -250px;
    }
</style>
@endguest
@endsection
