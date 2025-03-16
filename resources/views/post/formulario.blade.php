@extends('app')
@section('content')
@Auth
    <div class="container mt-4">
        <a href="/lista" class="btn btn-secondary mb-3"  style="margin-left: 500px;margin-top: 10px;"><h5 class="text">← Regresar a la Lista</h5></a>

        <div class="card">
            <div class="card-header bg-primary text-white">
                Crear Nuevo Planeta
            </div>
            <div class="card-body">
                <form action="{{ route('post.formulario') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre del planeta" required>
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Tamaño</label>
                        <input type="number" class="form-control" name="size" placeholder="Tamaño del planeta" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" name="description" placeholder="Descripción del planeta" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="moons" class="form-label">Lunas</label>
                        <input type="number" class="form-control" name="moons" placeholder="Cantidad de lunas" required>
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Posición</label>
                        <input type="number" class="form-control" name="position"
                            placeholder="Posición en el sistema solar" required>
                    </div>

                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="imageInput" name="image" accept="image/*">
                        <div class="mt-3">
                            <label class="form-label">Vista Previa de la Imagen:</label><br>
                            <img id="preview" class="img-thumbnail" src="" alt="Vista previa de la imagen"
                                style="display: none; max-width: 200px;">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success" ><h5 class="text">Enviar</h5></button>
                </form>
            </div>
        </div>
    </div>
    <style>

        .mb-3{
            color: white;

        }
        .card {

            padding: 10%;
            box-shadow: 10px 10px rgba(128, 128, 128, 0.24);


            border: solid 2px rgba(255, 255, 255, 0.562);
            border-radius: 30px;

        }
        .btn{
            background-color: white;
            .text{
            color: gray;


            position: relative;
        }

        }
        .btn:hover{
            background-color: rgba(0, 0, 0, 0);
            .text{
                color: white;
        }}

    </style>

    <script>
        const imageInput = document.getElementById('imageInput');
        const preview = document.getElementById('preview');

        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
    @endAuth
@endsection
