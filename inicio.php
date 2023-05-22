<!DOCTYPE html>
<html>
<?php
include 'head.php';
?>
<head>
  <title>Página Principal</title>
  <!-- Agrega los enlaces a los archivos de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <style>
    /* Estilos personalizados para el carrusel */
 
  </style>
</head>
<body>
    <br><br>
<h1 class="font-weight-bold">B I E N V E N I D O</h1>
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        $imageDirectory = 'images/img/'; // Directorio de las imágenes
        $images = glob($imageDirectory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        $firstImage = true;
        foreach ($images as $index => $image) {
          $activeClass = $firstImage ? 'active' : '';
          echo '
          <li data-target="#carouselExampleIndicators" data-slide-to="' . $index . '" class="' . $activeClass . '"></li>
          ';
          $firstImage = false;
        }
        ?>
      </ol>
      <div class="carousel-inner">
        <?php
        $firstImage = true;
        foreach ($images as $index => $image) {
          $activeClass = $firstImage ? 'active' : '';
          echo '
          <div class="carousel-item ' . $activeClass . '">
            <img class="d-block w-100" src="' . $image . '" alt="Slide ' . ($index + 1) . '">
            <div class="carousel-caption">
             
            </div>
          </div>
          ';
          $firstImage = false;
        }
        ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('.carousel').carousel();
    });

    $('.carousel').carousel({
      pause: "hover"
    });
  </script>
  <?php
  include 'foot.php';
  ?>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>

