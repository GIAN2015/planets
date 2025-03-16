@extends('app')
@section('content')
@Auth
<a href="/lista"> Regresar a la Lista </a>

<div class="row">
    <div class="col">
        <img src="/storage/{{ $post->image }}">
    </div>
    <div class="col">
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" style="color: white;"><a href="/lista">Lista</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: white;">{{$post->name}}</li>
            </ol>
        </nav>


        <ol class="list-group list-group-numbered ">
            <li class="list-group-item d-flex justify-content-between align-items-start"
                style="background-color: rgb(250, 248, 248);">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Nombre del Planeta</div>
                    <h1 class="item"> {{$post->name}} </h1>
                </div>
                <span class="badge text-bg-primary rounded-pill">{{$post->fecha}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Descripción</div>
                    <h5 class="item"> {{$post->description}} </h5>
                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Tamaño (km)</div>

                    <h1 class="item"> {{$post->size}} </h1>
                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Lunas</div>

                    <h1 class="item"> {{$post->moons}} </h1>
                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Posición</div>

                    <h1 class="item"> {{$post->position}} </h1>
                </div>

            </li>
        </ol>
        <form type="hidden" action="{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" onclick="confirmDelete()">
                borrar
            </button>
        </form>
        <a href="{{$post->id}}/edit">
            <button class="btn btn-warning">
                editar
            </button>
        </a>





    </div>

    <div>
        <script>
            function confirmDelete() {
                if (confirm('¿Estás seguro de que deseas eliminar este planeta?')) {
                    document.querySelector('form').submit();
                }

            }
        </script>

        <style>
            .row {
                padding: 100px;
            }

            .item {
                color: gray;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
        </style>
        @endAuth
        @endsection
