

<?php

function portada($producto_id, $producto){

 $salida = "";   

 $salida = $salida . '<div class="col-lg-4">';
 $salida = $salida . '<h2>'. $producto["nombre"]. '</h2>';
 $salida = $salida . '<img src="' . $producto["imagen"] .'" alt="'. $producto["nombre"] . '" class= "img-rounded">';
 $salida = $salida . '<p>'. $producto["descripcion"]. '</p>';
 $salida = $salida . '<p><a class="btn btn-info" href="oferta.php?id='. $producto_id .'" role="button">precio: '. $producto["precio"]. '</a></p></div>';

    return $salida;
}




$productos = array();
$productos[001] = array(
"nombre" => "aaaaaa",
"descripcion" => "wssss",
"precio" => 1000,
"categoria" => 1,
"imagen" => "img/man.jpg"
);
$productos[002] = array(
"nombre" => "aaaaaa",
"descripcion" => "wssss",
"precio" => 1000,
"categoria" => 1,
"imagen" => "img/man.jpg"
);
$productos[003] = array(
"nombre" => "aaaaaa",
"descripcion" => "wssss",
"precio" => 1000,
"categoria" => 1,
"imagen" => "img/man.jpg"
);
$productos[004] = array(
"nombre" => "aaaaaa",
"descripcion" => "wssss",
"precio" => 1000,
"categoria" => 1,
"imagen" => "img/man.jpg"
);

?>