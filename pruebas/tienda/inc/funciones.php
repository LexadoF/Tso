
<?php

function portada($oferta_id, $oferta){

 $salida = "";   

 $salida = $salida . '<div class="col-lg-4">';
 $salida = $salida . '<h2>'. $oferta["nombre"]. '</h2>';
 $salida = $salida . '<img src="' . $oferta["imagen"] .'" alt="'. $oferta["nombre"] . '" class= "img-rounded">';
 $salida = $salida . '<p>'. $oferta["descripcion"]. '</p>';
 $salida = $salida . '<p><a class="btn btn-info" href="oferta.php?id='. $oferta_id .'" role="button">precio: '. $oferta["precio"]. '</a></p></div>';

    return $salida;
}




$ofertas = array();
$ofertas[001] = array(
"nombre" => "aaaaaa",
"descripcion" => "wssss",
"precio" => 1000,
"categoria" => 1,
"imagen" => "img/pp1.jpg"
);
$ofertas[002] = array(
"nombre" => "aaaaaa",
"descripcion" => "wssss",
"precio" => 1000,
"categoria" => 1,
"imagen" => "img/pp1.jpg"
);
$ofertas[003] = array(
"nombre" => "aaaaaa",
"descripcion" => "wssss",
"precio" => 1000,
"categoria" => 1,
"imagen" => "img/pp1.jpg"
);
$ofertas[004] = array(
"nombre" => "aaaaaa",
"descripcion" => "wssss",
"precio" => 1000,
"categoria" => 1,
"imagen" => "img/pp1.jpg"
);

?>