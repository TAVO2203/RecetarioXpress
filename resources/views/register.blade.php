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
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
        <h2 class="text-center mb-4">Registro</h2>

        <div class="form-floating_mb-3">
            <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre Completo" required>
            <label for="Nombre">Nombre</label>
        </div>

        <div class="form-floating_mb-3">
            <input type="email" name="Email" id="Email" placeholder="name@example.com" required> 
            <label for="Email">Email</label>
        </div>

        <div class="form-floating_mb-3">
            <input type="password" name="Password" id="Password" placeholder="Password" required>
            <label for="Password">Contraseña</label>
        </div>

        <button class="btn">Registrarse</button>
        <div class="line-width-text">
                <span> O Registrarse con</span>
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
</body>
</html>
