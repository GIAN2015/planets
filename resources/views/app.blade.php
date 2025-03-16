<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Sistema Solar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- En el <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Antes de </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header style="background-color:rgb(10, 8, 8);">
        <x-header />
    </header>
    <div class="content">
        @yield('content')
    </div>

    <footer style="  background: black ;
        color: white;
        padding: 10px;
     

        text-align: center;">
        <x-footer />
    </footer>





</body>

</html>



<style>
    .content {

        background-color: black;
        padding: 50px;
    }

    footer {
        position: relative;
        background: #000;
        color: #fff;
        padding: 20px;
        text-align: center;
        overflow: hidden;
        height: 400px;
        /* Ajusta según necesites */
    }

    /* Animación de parpadeo */
    footer {
        position: relative;
        background: #000;
        color: #fff;
        padding: 20px;
        text-align: center;
        overflow: hidden;
        height: 600px;
        /* Ajusta la altura según necesites */
    }

    /* Definimos tres animaciones de parpadeo con tiempos diferentes */
    @keyframes twinkle1 {

        0%,
        100% {
            opacity: 0.3;
        }

        50% {
            opacity: 1;
        }
    }

    @keyframes twinkle2 {

        0%,
        100% {
            opacity: 0.2;
        }

        40% {
            opacity: 1;
        }
    }

    @keyframes twinkle3 {

        0%,
        100% {
            opacity: 0.4;
        }

        60% {
            opacity: 1;
        }
    }

    /* Estrellas generadas con múltiples radial-gradient */
    footer::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:
            radial-gradient(2px 2px at 10% 20%, #fff, transparent),
            radial-gradient(1.5px 1.5px at 30% 40%, #fff, transparent),
            radial-gradient(5px 5px at 50% 10%, #fff, transparent),
            radial-gradient(5px 5px at 70% 80%, #fff, transparent),
            radial-gradient(2px 2px at 90% 50%, #fff, transparent),
            radial-gradient(1.5px 1.5px at 80% 20%, #fff, transparent),
            radial-gradient(3px 3px at 60% 60%, #fff, transparent),
            radial-gradient(5px 5px at 40% 70%, #fff, transparent),
            radial-gradient(2px 2px at 20% 90%, #fff, transparent),
            radial-gradient(2px 2px at 85% 15%, #fff, transparent),
            radial-gradient(5px 5px at 65% 15%, #fff, transparent),
            radial-gradient(2px 2px at 85% 65%, #fff, transparent);
        animation: twinkle1 3s infinite alternate ease-in-out,
            twinkle2 4s infinite alternate ease-in-out,
            twinkle3 5s infinite alternate ease-in-out;
        z-index: 0;
    }

    /* Asegurar que el contenido del footer esté por encima del fondo */
    footer>* {
        position: relative;
        z-index: 1;
    }
</style>
