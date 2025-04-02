<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EL ENFOQUE</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #fff;
      margin: 0;
      color: #222;
    }
    header {
      text-align: center;
      padding: 20px 10px 5px;
      border-bottom: 1px solid #ccc;
    }
    header h1 {
      font-family: 'Playfair Display', serif;
      font-size: 48px;
      margin: 0;
    }
    header p {
      font-style: italic;
      color: #555;
      margin-top: 4px;
    }
    nav {
      background-color: #f5f5f5;
      padding: 10px;
      text-align: center;
    }
    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }
    .container {
      display: flex;
      max-width: 1200px;
      margin: 20px auto;
      gap: 20px;
    }
    .main {
      flex: 3;
    }
    .sidebar {
      flex: 1;
      border-left: 1px solid #ccc;
      padding-left: 20px;
    }
    .article {
      margin-bottom: 30px;
    }
    .article img {
      width: 100%;
      height: auto;
    }
    .article h2 {
      font-size: 24px;
      margin: 10px 0;
    }
    .article p {
      color: #555;
    }
    footer {
      text-align: center;
      padding: 20px;
      background-color: #f0f0f0;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>
  <header>
    <h1>EL ENFOQUE</h1>
    <p>Observamos distinto.</p>
    <div>Miércoles, 2 de abril de 2025</div>
  </header>

  <nav>
    <a href="#">Política</a>
    <a href="#">Economía</a>
    <a href="#">Cultura</a>
    <a href="#">Ciencia</a>
    <a href="#">Opinión</a>
  </nav>

  <div class="container">
    <main class="main">
      <div class="article">
        <img src="https://via.placeholder.com/800x400" alt="Imagen principal">
        <h2>Crisis energética mundial: Nuevas tensiones en los mercados</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate justo felis commodo libero...</p>
      </div>
      <div class="article">
        <h2>Educación en crisis: ¿Qué están haciendo los gobiernos?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at felis id magna cursus imperdiet...</p>
      </div>
      <div class="article">
        <h2>Entrevista: La inteligencia artificial y el futuro del trabajo</h2>
        <p>Quisque nec sem a turpis dignissim finibus. Suspendisse vel mauris eu sapien vehicula fermentum...</p>
      </div>
    </main>

    <aside class="sidebar">
      <h3>Secciones</h3>
      <ul>
        <li>📌 Política</li>
        <li>📈 Economía</li>
        <li>🎨 Cultura</li>
        <li>🔬 Ciencia</li>
        <li>🗣️ Opinión</li>
      </ul>
    </aside>
  </div>

  <footer>
    &copy; 2025 El Enfoque. Todos los derechos reservados.
  </footer>
</body>
</html>
