<?php 
require_once 'conexion.php'; // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
 
  $params = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE
  
  

  $conexion = conexion(); // CREA LA CONEXION
  
  // REALIZA LA QUERY A LA BASE DE DATOS
  $resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$params-> usuario' AND contrasena='$params-> contrasena'");
 
    class Result {}
    $sql = "SELECT * FROM usuarios $where";
	$resultado = $mysqli->query($sql);
    
    // GENERA LOS DATOS DE RESPUESTA
    $response = new Result();
    
    if($resultado->num_rows > 0) {
        $response->resultado = 'OK';
        $response->mensaje = 'LOGIN EXITOSO';
    } else {
        $response->resultado = 'FAIL';
        $response->mensaje = 'LOGIN FALLIDO';
    }
    
    header('Content-Type: application/json');
    
    echo json_encode($response); // MUESTRA EL JSON GENERADO
    
?>