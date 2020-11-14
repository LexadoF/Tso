<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
 
  $datos = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE
  
  require("../conexion/conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA BD

  $conexion = conexion(); // CREA LA CONEXION
  
  // REALIZA LA QUERY A LA BD
  mysqli_query($conexion, "INSERT INTO vendedor(documento, nombre, telefono, correo, contrasena) VALUES
                  ('$datos->documento', '$datos->nombre', '$datos->telefono', '$datos->correo', '$datos->contrasena')");    
  
  class Result {}

  // GENERA LOS DATOS DE RESPUESTA
  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'SE REGISTRO EXITOSAMENTE EL VENDEDOR';

  header('Content-Type: application/json');

  echo json_encode($response); // MUESTRA EL JSON GENERADO
?>