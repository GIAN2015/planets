@extends('app')
@section('content')
    @Auth
        <h2 style="color: white;">Bienvenido, {{ Auth::user()->name }}</h2>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">
                <h2 style="color: white;">Cerrar Sesión</h2>
            </button>
        </form>
    @endAuth
@endsection
