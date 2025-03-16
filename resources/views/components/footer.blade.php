<div class="row">
    <div class="col">
        <div class="card-1.5" style="width: 18rem;">
            <a href="/">
            <img src="{{ asset('storage/assets/img/Marca_Gian.png') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Desarrolado por Gian Sinarahua Cárdenas </p>
            </div>
        </div>
    </div>
    <div class="col-2" style="z-index: 100;">
        <ul>
            <li style="font-size: 22px;">
                Menu
            </li>
            <li> <i class="fas fa-globe"></i><a class="menu" href="/lista"> Planetas</a>

            </li>
            <li> <i class="fas fa-moon"></i> <!-- Luna --><a class="menu" href="/create"> Crea tu planeta</a></li>
            <li> <i class="fas fa-sun"></i> <!-- Sol --><a class="menu" href="/desarrolador"> Desarrolador</a></li>
            <li> <i class="fas fa-star"></i> <!-- Estrella --><a class="menu" href="/create">otros</a></li>
            <li> <i class="fas fa-moon"></i> <a class="menu" href="/coment"> Comentarios</a></li>




        </ul>


    </div>

    <div class="col">


        <div class="card-2" style="width: 20rem;">
            <img src="{{ asset('storage/assets/img/R.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sigueme en mi GitHub</h5>
                <p class="card-text">"If there are no opportunities, create them "</p>
                <a href="https://github.com/GIAN2015" class="btn">Go Github</a>
            </div>
        </div>




    </div>

</div>



<style>
    .btn {
        border: 1px solid white;
        text-transform: uppercase;
    }
    .btn:hover {
        border: 1px solid grey;
        text-decoration-line: underline;
    }

    .card {


        background-color: black;


    }

    .card-2 {
        background-color: black;
        margin-left: 240px;

    }

    .card-text {
        color: white;
    }

    .menu {
        font-size: 20px;

        padding: 0;
        margin: 0;
        color: white;
        list-style: none;




    }

    .menu:hover {
        color: grey;
    }

    .col-2 {
        margin-top: 100px;
        font-size: 15px;
        font-family: 'Lora', serif;
        text-align: left;
    }
</style>
