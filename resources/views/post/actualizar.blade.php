@extends('app')
@section('content')


<h1> Felicidades se ha actualizado </h1>
<a href="/lista"> Regresar a la lista</a>
@foreach ($post as $post)
    {


    <li>

        {{$post->name}}

    </li>
     <li>

        {{$post->size}}

    </li>
     <li>

        {{$post->description}}

    </li>
        <li>

            {{$post->moons}}
            </li>
        <li>

            {{$post->position}}
            </li>
        <li>

            {{$post->image}}
            </li>




    }
@endforeach

@endsection
