<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión usuarios</title>
    <link rel="icon" type="image" href="{{ asset('images/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100"
    style="background: url('/images/fondoLogin.jpg') no-repeat center center; 
            background-size: cover; 
            width: 100vw; 
            height: 100vh;">
    <div class="container">
        <h1 class="text-center" style = "Color:#FFF;">Registrarme</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5" style="box-shadow: 0px 0px 20px rgba(0,0,0,0.5); background: #transparent; backdrop-filter: blur(3px); padding:0;">
                <form action="{{route('Usuarios.store')}}" method="POST" class="p-4 border rounded shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="Nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="Password" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-danger" value="Cancelar">
                        <a href="javascript:history.back()" class="btn btn-success">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>