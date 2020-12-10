<?php

 global $enlace; //variable de tipo global para llamarla en cualquier parte de la aplicacion donde se llame


function conexion(){


    $enlace = mysqli_connect('localhost', 'root', '', 'tso'); //conexion con la base de datos
    
    if(!$enlace){ //if $enlace esto da siempre true (Si tenemos error en la conexion por eso pone !)
     echo "Error: No se puede conectar a MySQL." . PHP_EOL;
     echo "Errno de depuracion: " . mysqli_connect_errno() . PHP_EOL;//Devuelve el código de error de la última llamada
     echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;//Devuelve una cadena con la descripción del último error de conexión
     exit;
    }
   return $enlace;

}

?>