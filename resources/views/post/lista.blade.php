@extends('app')
@section('content')


<h1 class="title"> Nombres de los planetas </h1>

<div class="container">
    <div class="row">
        @foreach($lista as $post)
        <div class="col-md-4 mb-4"> <!-- 3 columnas en pantallas medianas o más grandes -->
            <a class="planet" href="{{route('post.show', $post)}}">
                <div class="card-3"> <!-- Ajuste al ancho del contenedor -->
                    <img src="/storage/{{$post->image}}" class="card-img-top" alt="{{$post->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->name}}</h5>

                    </div>
                </div>
            </a>
        </div>

        @endforeach

        <a href="/create">
            <div class="card-3"> <!-- Ajuste al ancho del contenedor -->

                <div class="create">
                    <h1 class="pos">?</h1>

                </div>

                <div class="card-body">
                    <h5 class="card-title">Crea tu Planeta</h5>

                </div>
            </div>
        </a>

    </div>
</div>

<div class="pagination">

</div>
{{ $lista->links() }}



<style>
    .pagination{
        margin-left: 500px;
        margin-top: 20px;
    }
    .pos {
        position: absolute;
        margin-left: 110px;
        margin-top: 50px;
        font-size: 150px;
        color: rgba(245, 245, 245, 0.5);
    }

    .create {
        border: solid 5px rgba(255, 255, 255, 0.37);
        border-radius: 100%;
        width: 280px;
        height: 280px;
        margin-left: 10px;
        margin-top: 10px;
    }

    .card-3 {
        position: relative;
        /* Asegura que los elementos hijos se posicionen dentro */
        width: 300px;
        height: 400px;
        background: #111;
        /* Fondo oscuro para resaltar las estrellas */
        border-radius: 10px;
        overflow: hidden;
        /* Evita que las estrellas salgan de la tarjeta */
        box-shadow: 0 0 10px rgb(250, 250, 250);

    }





    .card-3:hover {
        transition: transform 0.3s ease-in-out;
        transform: scale(1.1);
    }



    .btn {
        color: black;
        background-color: gainsboro;
        border: 10px white;
    }

    .card-title {

        color: white;
        text-align: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: x-large
    }

    .title {
        font-family: monospace;
        font-size: 0px;
        color: white;
        text-align: center;
    }

    .container {
        background-color: black;

    }
</style>
@endsection
