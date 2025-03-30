<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Recetas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image" href="{{ asset('images/logo.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: url('/images/fondoRecetas.jpg') no-repeat center center;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
          background: transparent;
          backdrop-filter: blur(10px);
          padding: 20px;
          margin-top: 3%;
          width: 450px;
          height: 470px;
          border: 2px solid #000;
          border-radius: 10px;
          box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-custom {
            background-color: transparent;
            color: #000;
            border: 2px solid #000;
            width: 100%;
            border-radius: 18px;
            transition: 0.3s linear;
        }

        .btn-custom:hover {
            background-color: #A8D5BA;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2 class="text-center mb-4">Crear Receta</h2>
    <form action="{{route('Recetas.update', $receta->id)}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Paella de mariscos" required value="{{$receta->Titulo}}">
    </div>

    <div class="mb-3">
        <label for="instrucciones" class="form-label">Instrucciones</label>
        <textarea class="form-control" name="instrucciones" id="instrucciones" rows="3"></textarea required value="{{$receta->Instrucciones}}">
    </div>

    <button type="submit" class="btn btn-custom">Guardar</button>
    </form>
</div>

</body>
</html>