<?php
session_start();
//Si la variable sesión está vacía
// if (!isset($_SESSION['cliente'])) 
// {
//    /* nos envía a la siguiente dirección en el caso de no poseer autorización */
//    header("location:../index.php"); 
// }
// $user=$_SESSION['cliente'];

// $sql="SELECT * FROM cliente where id=$user";

$mensaje ="";

if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){

        case 'Agregar':
            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje="ok correcto ".$ID;

            }else{
                $mensaje="error id falla".$ID;
            }
            if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                $mensaje="ok correcto ".$NOMBRE;
            }else{$mensaje= "error en el nombre"; break;}

            if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
                $CANTIDAD= openssl_decrypt($_POST['cantidad'],COD,KEY);
                $mensaje="ok correcto ".$CANTIDAD;
            }else{$mensaje= "error en la cantidad"; break;}

            if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                $PRECIO= openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje="ok correcto ".$PRECIO;
            }else{$mensaje= "error en la precio"; break;}
            
            if(!isset($_SESSION['CARRITO'])){
                $producto= array(
                    'ID' =>$ID,
                    'NOMBRE' =>$NOMBRE,
                    'CANTIDAD' =>$CANTIDAD,
                    'PRECIO' =>$PRECIO
                );
                $_SESSION['CARRITO'][0]=$producto;
                $mensaje ="producto agregado al carro";
            }else{
                $idProductos= array_column($_SESSION['CARRITO'],"ID");
                if(in_array($ID, $idProductos)){
                    echo "<script>alert('ya seleccionaste este producto');</script>";
                    $mensaje="";

                }else{
                $numeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
                    'ID' =>$ID,
                    'NOMBRE' =>$NOMBRE,
                    'CANTIDAD' =>$CANTIDAD,
                    'PRECIO' =>$PRECIO
                );
                $_SESSION['CARRITO'][$numeroProductos]=$producto;
                $mensaje ="producto agregado al carro";
                }
            }
            // $mensaje =print_r($_SESSION,true);
            


        break;
        case 'Borrar':
            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);

                foreach($_SESSION['CARRITO'] as $indice=>$producto){
                    if($producto['ID']==$ID){
                        unset($_SESSION['CARRITO'][$indice]);
                        // echo "<script>alert('Elemento borrado');</script>";
                    }
                };

                // $mensaje="ok correcto ".$ID;
                
            }else{
                $mensaje="error".$ID;
                echo "<script>alert('Elemento falla');</script>";
            }

    }

}

?>