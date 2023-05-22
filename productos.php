<!DOCTYPE html>
<html lang="es">
<head>
<?php

include 'head.php';
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Productos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1 class="text-center">Catálogo de Productos</h1>

    <!-- Categoría 1: Ropa -->
    <h2 class="mt-5">Pinturas vinilicas</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="images/1v.jpg" class="card-img-top" alt="Ropa 1">
          <div class="card-body">
            <h5 class="card-title">AZUL CIELO</h5>
            <p class="card-text">De Pintucato® Antiviral y Antibacterial</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/2v.jpg" class="card-img-top" alt="Ropa 2">
          <div class="card-body">
            <h5 class="card-title">ROSA</h5>
            <p class="card-text">De Pintucato® Antiviral y Antibacteria.</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/3v.jpg" class="card-img-top" alt="Ropa 3">
          <div class="card-body">
            <h5 class="card-title">AMARILLO</h5>
            <p class="card-text">De Pintucato® Antiviral y Antibacteria</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>



    <h2 class="mt-5">Maderas</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="images/1m.jpg" class="card-img-top" alt="Ropa 1">
          <div class="card-body">
            <h5 class="card-title">CERA</h5>
            <p class="card-text">Ideal para tapar el poro en superficies de madera.</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/2m.jpg" class="card-img-top" alt="Ropa 2">
          <div class="card-body">
            <h5 class="card-title">TINTA</h5>
            <p class="card-text">Ideal para tapar el poro en superficies de madera.</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/3m.jpg" class="card-img-top" alt="Ropa 3">
          <div class="card-body">
            <h5 class="card-title">BARNIZ</h5>
            <p class="card-text">Ideal para tapar el poro en superficies de madera.</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Categoría 2: Electrónica -->
    <h2 class="mt-5">Texturas y efectos </h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="images/1t.jpg" class="card-img-top" alt="Electrónica 1">
          <div class="card-body">
            <h5 class="card-title">LISA</h5>
            <p class="card-text">Crea espacio de amplitud y elegancia </p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/2t.jpg" class="card-img-top" alt="Electrónica 2">
          <div class="card-body">
            <h5 class="card-title">MARMOL</h5>
            <p class="card-text">Crea espacio de amplitud y elegancia</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/3t.jpg" class="card-img-top" alt="Electrónica 3">
          <div class="card-body">
            <h5 class="card-title">GRANITO</h5>
            <p class="card-text">Crea espacio de amplitud y elegancia</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <!-- Agrega más productos de la categoría de electrónica aquí -->
    </div>
  </div>
  

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <?php

include 'foot.php';
?>
</body>
</html>
