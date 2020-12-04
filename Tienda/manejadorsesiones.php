<?php
require("./conexion/conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA BD

$conexion = conexion(); // CREA LA CONEXION
//Recibimos las dos variables
$email=$_POST["usuario"];
$password=$_POST["password"];
 
/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el usuario que está intentando acceder */

$cliente = mysqli_query($conexion,"SELECT * FROM cliente WHERE email = '$email' AND password = '$password'");
$vendedor = mysqli_query($conexion,"SELECT * FROM vendedor WHERE email = '$email' AND password = '$password'");
$administrador = mysqli_query($conexion,"SELECT * FROM administrador WHERE email = '$email' AND password = '$password'");
 
/* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
tres tablas, por lo tanto se guardará en alguno de nuestras tres variables 
que guardan nuestra consulta */
 
/* Ahora comprobamos que variable contiene al usuario*/
if(mysqli_num_rows($cliente) > 0) 
{
    /* Si entra en este if significa que el que intenta acceder es un alumno, 
    por lo tanto le creamos una sesión */
    session_start();
 
    $_SESSION['cliente']="$email";
 
    /* Nos dirigimos al espacio de los alumnos usando header que nos 
    redireccionará a la página que le indiquemos */
    header("Location: cliente/index.php");
 
    /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
    seguir ejecutando código de este archivo */
    exit(); 
}
 
/* Ahora comprobamos si el que intenta acceder es un profesor */
else if(mysqli_num_rows($vendedor) > 0) 
{
    session_start();
    $_SESSION['vendedor']="$email";
    header("Location: vendedor/index.php");
    exit(); 
}
 
//comprobamos si es un director el que intenta abrir la sesión
else if(mysqli_num_rows($administrador) > 0) 
{
    session_start();
    $_SESSION['administrador']="$email";
    header("Location: administrador/index.php");
    exit();
} 
else 
{
   /* Si no el usuario no se encuentra en ninguna de las tres tablas 
   imprime el siguiente mensaje */
//    $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
//    echo $mensajeaccesoincorrecto; 
}
?>