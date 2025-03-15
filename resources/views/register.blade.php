<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>
<body>
    <div class="container mt-5">
    <div class="formulario">
        <h2 class="text-center mb-4">Registro</h2>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre Completo">
            <label for="nombre">Nombre</label>
        </div>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password">
            <label for="password">Contraseña</label>
        </div>

        <button class="btn btn-primary w-100">Registrarse</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
