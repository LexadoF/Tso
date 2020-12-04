<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito2.php';

include 'templates/cabecera.php';

?>

<?php

if($_POST){
    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];
    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);

    }
    $sentencia=$pdo->prepare("INSERT INTO `ventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`)
     VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente');");

$sentencia->bindParam(":ClaveTransaccion",$SID);
$sentencia->bindParam(":Correo",$Correo);
$sentencia->bindParam(":Total",$total);
$sentencia->execute();
$idVenta=$pdo->lastInsertId();

    echo "<h3>".$total."<h3>";
    echo "<h3>".$Correo."<h3>";
}

?>


<?php
include 'templates/pie.php';
?>