<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecetarioXpress</title>
    <link rel="icon" type="image" href="{{ asset('images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="fontawesome\fontawesome-free-6.7.2-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/index.css') }}">
</head>
<body>
<header class="header">
    <a href="#" class="logo">
        <img src="{{ asset('images/logo.png') }}">
    </a>
    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#Recetarios">Recetarios</a>
        <a href="#">Aprende</a>
        <a href="#">Comunidad</a>
    </nav>
    <button class="btn1"><strong>Registrarse</strong></button>
    <button class="btn2"><strong>Iniciar Sesión</strong></button>
    <div class="icons">
       <div class="fas fa-search" id="search-btn"></div>
       <div class="fas fa-bars" id="menu-btn"></div>
    </div>
    <div class="search-form">
        <input type="search" id="search-box" placeholder="Busca tus recetas aquí...">
        <label for="search-box" class="fas fa-search"></label>
    </div>
    <script src="JS/script.js"></script>
</header>
<section class="home" id="home">
    <div class="content">
        <h3>Esta es tu cocina</h3>
        <p>Descubre, comparte y disfruta de las mejores recetas caseras. Encuentra platos deliciosos, 
        tips de cocina y todo lo que necesitas para convertirte en un experto culinario. 
        ¡Empieza a cocinar hoy!</p>
        <a href="#" class="btn3"> Descubre recetas</a>
    </div>
</section>
<!--Recetas-->
<section class="recetas" id="Recetarios">
    <h1 class="heading">Recetarios</h1>
    <div class="content">
        <h3> ¿Qué quieres cocinar hoy?</h3>
        <p> Ofrecemos recetas fáciles, rápidas y deliciosas para todos los gustos. 
            Con ingredientes accesibles y pasos sencillos, 
            cocinar nunca fue tan divertido. ¡Inspírate y cocina con nosotros!
        </p>
    </div>    
    <ul class="button-container">
        <li><a href="#todo" class="filter-button active">Todas</a></li>
        <li><a href="#tipos" class="filter-button">Tipo de platillos</a></li>
        <li><a href="#delicias" class="filter-button">Delicias con...</a></li>
        <li><a href="#"class="filter-button">Repostería y panadería</a></li>
        <li><a href="#" class="filter-button">Ocasión especial</a></li>
    </ul>
    <div class="container" id="todo">
      <div class="types-recipes">
          <h2 class="H2-all" id="tipos"> Tipos de platos</h2>
            <a href="#" class="item">
             <img src="{{ asset('images/TiposPlatillos/entradas.webp') }}" alt="Imagen de entradas" title="Entradas">
             <p> Entradas </p>
            </a>
            <a href="#" class="item">
               <img src="images/TiposPlatillos/Pasta.jpg" alt="Imagen de pasta" title="Pasta en un plato">
               <p> Pastas </p>
            </a>
            <a href="#" class="item">
               <img src="images/TiposPlatillos/arroz.jpg" alt="Imagen de arroz" title="Arroz con alverjas">
               <p> Arroz </p>
            </a>
            <a href="#" class="item">
              <img src="images/TiposPlatillos/carne.jpg" alt="Imagen de carnes" title="Carnes en un plato">
              <p> Carnes </p>
            </a>
            <a href="#" class="item">
              <img src="images/TiposPlatillos/pescado.jpg" alt="Imagen de pescado" title="Pescado en un plato">
              <p> Pescados </p>
            </a>
            <a href="#" class="item">
              <img src="images/TiposPlatillos/postre.jpg" alt="Imagen de postres" title="Postres en un plato">
              <p> Postres </p>
            </a>
            <a href="#" class="item">
              <img src="images/TiposPlatillos/snacks.webp" alt="Imagen de snacks" title="Snacks para hacer"> 
              <p> Snacks </p>
            </a>
            <a href="#" class="item">
              <img src="images/TiposPlatillos/bebidas.jpg" alt="Imagen de bebidas" title="Bebidas para preparar"> 
              <p> Bebidas </p>
            </a>
        </div>    
    </div>
<div class="container">
    <div class="types-recipes">
        <h2 class="H2-all" id="delicias"> Delicias con: </h2>
          <a href="#" class="item">
           <img src="images/RecetasCon/Huevos.jpg" alt="Imagen de Huevos" title="Huevos en plato">
           <p> Huevos </p>
          </a>
          <a href="#" class="item">
             <img src="images/RecetasCon/lentejas.jpg" alt="Imagen de lentejas" title="Lentejas en un plato">
             <p> Lentejas </p>
          </a>
          <a href="#" class="item">
             <img src="images/RecetasCon/aguacate.avif" alt="Imagen de arroz y aguacate" title="Aguacate">
             <p> Aguacate </p>
          </a>
          <a href="#" class="item">
            <img src="images/RecetasCon/mariscos.jpg" alt="Imagen de mariscos" title="Mariscos en un plato">
            <p> Mariscos </p>
          </a>
          <a href="#" class="item">
            <img src="images/RecetasCon/pan.jpg" alt="Imagen de panes" title="Panes con cilantro">
            <p> Pan </p>
          </a>
          <a href="#" class="item">
            <img src="images/RecetasCon/queso.jpg" alt="Imagen de sandwich con queso" title="Recetas con Queso">
            <p> Queso </p>
          </a>
          <a href="#" class="item">
            <img src="images/RecetasCon/chocolate.jpg" alt="Imagen de chocolate" title="Chocolate preparaciones"> 
            <p> Chocolate </p>
          </a>
          <a href="#" class="item">
            <img src="images/RecetasCon/Maiz.png" alt="Imagen de maiz" title="Dip de maíz"> 
            <p> Maíz </p>
          </a>
      </div>    
  </div>
</section>
</body>
</html>