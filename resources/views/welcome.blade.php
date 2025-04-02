@extends('layouts.app')

@section('content')
<div class="main-container">
  <div class="main-news">
      <img src="https://via.placeholder.com/800x400" alt="Noticia principal">
      <h2>La verdad detrás del último conflicto global</h2>
      <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed felis eget felis feugiat hendrerit.
          Sed id erat nec arcu gravida ultrices. Maecenas tincidunt, magna ut lacinia tincidunt, augue erat
          blandit urna, a efficitur orci lacus nec urna.</p>
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

@endsection
