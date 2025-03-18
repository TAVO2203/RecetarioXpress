<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('CSS/register.css') }}">

</head>
<body>
    <div class="formulario">
        <form>
        <h2 class="text-center mb-4">Registro</h2>

        <div class="form-floating_mb-3">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre Completo">
            <label for="nombre">Nombre</label>
        </div>

        <div class="form-floating_mb-3">
            <input type="email" id="email" placeholder="name@example.com">
            <label for="email">Email</label>
        </div>

        <div class="form-floating_mb-3">
            <input type="password" id="password" placeholder="Password">
            <label for="password">Contraseña</label>
        </div>

        <button class="btn">Registrarse</button>
        <div class="line-width-text">
                <span> O IRegistrarse con</span>
            </div>
            <div class="other-login">
                <a href="#" class="google">
                    <img src="{{ asset('images/google.webp') }}">
                    <span> Google </span>
                </a>
                <a href="#" class="facebook">
                  <img src="{{ asset('images/facebook.jpg') }}">
                  <span> Facebook </span>
                </a>
            </div>
        </form>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
