<?php
include('inc/funciones.php')
?>
<?php
if(isset($_GET["id"])){

  $oferta_id = $_GET["id"];

  if (isset($ofertas[$oferta_id])) {
    
    $oferta = $ofertas[$oferta_id];
  }
}else{
  header("Location: ofertas.php");
  exit();
}



$tituloPagina = "Producto Especifico";
$pagina = "Producto";
include('inc/header.php');  ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
              <p> <img src="<?php echo $oferta["imagen"]; ?>" alt="<?php echo $oferta["nombre"]; ?>"></p>
              <h2><?php echo $oferta["nombre"]; ?></h2>
              <p><?php echo $oferta["descripcion"]; ?></p>
              <p><a class="btn btn-primary" href="#">comprar: <?php echo $oferta["precio"] ?></a></p>
              </div>

              <div class="col-md-4">
              </div>
          </div>
      </div>
    </div>

  <?php include('inc/footer.php');  ?>
