<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealidadDigital.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+SC:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&family=Boldonse&family=Bungee+Tint&family=Honk&family=Tektur:wght@400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

  
</head>

<body>
    <header>
        <h1 class="alegreya-sc-bold">REALIDADDIGITAL.COM</h1>
        <p>Noticias que incomodan, datos que importan.</p>
    </header>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Política</a>
        <a href="#">Sociedad</a>
        <a href="#">Internacional</a>
        <a href="#">Economía</a>
        <a href="#">Ciencia</a>
        <a href="#">Opinión</a>
    </nav>
    <main class="flex-grow pt-20">
        @yield('content')
    </main>
 
    <footer>
        &copy; 2025 RealidadDigital.com. Todos los derechos reservados.
    </footer>
</body>

</html>
