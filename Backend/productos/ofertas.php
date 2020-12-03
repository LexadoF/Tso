<?php
include('inc/funciones.php')
?>
<?php
$tituloPagina = "Productos";
$pagina = "Productos";
include('inc/header.php');  ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenido a la pagina de productos</h1>
        <p>Tienda online</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- dest -->
      <div class="row">
      <?php foreach($ofertas as $oferta_id => $oferta){
        echo portada($oferta_id, $oferta);
          } ?>
      <hr>
    </div> <!-- /dest --> 
  <?php include('inc/footer.php');  ?>
