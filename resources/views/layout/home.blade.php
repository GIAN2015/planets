@extends('app')

@section('content')
<div class="gian">
    <!-- Sección del planeta principal -->
    <div class="row">
        <div class="col">
            <div class="card5">

                <img src="/storage/{{ $planets->last()->image }}" alt="{{ $planets->last()->name }}"
                    class="card-img-top">

                <div class="card-body">
                    <h1 class="card-title" style="color: whitesmoke;">{{ $planets->last()->name }}</h1>
                    <p class="card-text">{{ $planets->last()->description }}</p>
                </div>
                -
            </div>
        </div>
        _
        <div class="col">

            <div class="row">
                @foreach($planets as $planet)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <a href="lista/{{$planet->id}}">
                            <img class="planet" src="/storage/{{ $planet->image }}" alt="{{ $planet->name }}"
                                class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title" style="color: whitesmoke;"> {{ $planet->name }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Otros planetas -->

</div>
@endsection

<style>
    .card5{
        padding: 50px;
    }
    .gian {

        background-color: black;
        border-radius: 50px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 1s ease-out, transform 1s ease-out;


    }

    .gian.visible {
        opacity: 1;
        transform: translateY(0);

    }


    .planet {
        width: 200px;
        transition: all 0.3s ease;
        border-radius: 30px;

    }

    .planet:hover {
        scale: 1.1;
        transition: all 0.3s ease;
        border-radius: 30px;
        border: solid 2px gray;

    }

    .card-title {
        text-align: center;
        font-family: monospace;

    }

    .card-text {
        font-family: monospace;
        color: whitesmoke;
        text-align: center;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".gian").classList.add("visible");
});

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.1 }); // Se activa cuando el 10% del elemento es visible

    observer.observe(document.querySelector(".gian"));

</script>
