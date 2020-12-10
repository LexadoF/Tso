<?php
include("config.php");
$codigo = $_POST['buscar'];
$registros = mysqli_query($conexion,"SELECT * FROM producto WHERE nombre = '$codigo' and id= id");
while ($registro = mysqli_fetch_array($registros)){
    echo $registro['nombre'];
}
?>