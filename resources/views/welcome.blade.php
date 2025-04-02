<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RealidadDigital.com</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      margin: 0;
      background: #f9f9f9;
      color: #222;
    }
    
    header {
      background-color: #0c1b33;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    header h1 {
      font-family: 'Playfair Display', serif;
      font-size: 42px;
      margin: 0;
    }
    header p {
      margin-top: 5px;
      font-size: 16px;
      color: #ccc;
      font-style: italic;
    }
    nav {
      background-color: #13294b;
      display: flex;
      justify-content: center;
      padding: 10px;
    }
    nav a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
    }
    .main-container {
      max-width: 1200px;
      margin: 30px auto;
      display: grid;
      grid-template-columns: 3fr 1fr;
      gap: 30px;
      padding: 0 20px;
    }
    .main-news {
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .main-news img {
      width: 100%;
      height: auto;
      margin-bottom: 15px;
    }
    .main-news h2 {
      font-size: 28px;
      margin-bottom: 10px;
    }
    .main-news p {
      color: #444;
    }
    .sidebar {
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .sidebar h3 {
      border-bottom: 2px solid #13294b;
      padding-bottom: 5px;
      margin-bottom: 15px;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .sidebar li {
      margin-bottom: 10px;
    }
    .sidebar a {
      text-decoration: none;
      color: #13294b;
      font-weight: 600;
    }
    footer {
      text-align: center;
      padding: 20px;
      background-color: #0c1b33;
      color: #ccc;
      font-size: 14px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>REALIDADDIGITAL.COM</h1>
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

  <div class="main-container">
    <div class="main-news">
      <img src="https://via.placeholder.com/800x400" alt="Noticia principal">
      <h2>La verdad detrás del último conflicto global</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed felis eget felis feugiat hendrerit. Sed id erat nec arcu gravida ultrices. Maecenas tincidunt, magna ut lacinia tincidunt, augue erat blandit urna, a efficitur orci lacus nec urna.</p>
    </div>

    <aside class="sidebar">
      <h3>Más leídas</h3>
      <ul>
        <li><a href="#">¿Por qué el precio de los alimentos sigue subiendo?</a></li>
        <li><a href="#">Cinco contradicciones del discurso político actual</a></li>
        <li><a href="#">El impacto silencioso de la IA en el empleo</a></li>
        <li><a href="#">Protestas globales: lo que los medios no te muestran</a></li>
        <li><a href="#">Análisis: ¿Crisis energética o manipulación?</a></li>
      </ul>
    </aside>
  </div>

  <footer>
    &copy; 2025 RealidadDigital.com. Todos los derechos reservados.
  </footer>
</body>
</html>