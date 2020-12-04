<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nombre = $correo = $telefono = $mensaje = "";
$name_err = $correo_err = $telefono_err = $mensaje_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validar Nombre
    $input_name = trim($_POST["nombre"]);
    if(empty($input_name)){
        $name_err = "Ingresa un Nombre.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Ingresa Un Nombre Valido.";
    } else{
        $nombre = $input_name;
    }
    
    // Validar Stock
    $input_address = trim($_POST["correo"]);
    if(empty($input_address)){
        $correo_err = "Por Favor Ingresa Tu Correo.";     
    } else{
        $correo = $input_address;
    }
    
    // Validar precio
    $input_salary = trim($_POST["telefono"]);
    if(empty($input_salary)){
        $telefono_err = "Ingresa Tu Numero De Telefonico.";     
    } elseif(!ctype_digit($input_salary)){
        $telefono_err = "Por Favor Ingresa Tu Numero De Telefono.";
    } else{
        $telefono = $input_salary;
    }

    // Validar Categoria
    $input_mensaje = trim($_POST["mensaje"]);
    if(empty($input_mensaje)){
        $mensaje_err = "Ingresa un mensaje.";
    } elseif(!filter_var($input_mensaje, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $mensaje_err = "Ingresa Un Mensaje Valido.";
    } else{
        $mensaje = $input_mensaje;
    }

    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($correo_err) && empty($telefono_err) && empty($mensaje_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO contacto (nombre, correo, telefono, mensaje) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_address, $param_salary, $param_categoria);
            
            // Enviar Parametros
            $param_name = $nombre;
            $param_address = $correo;
            $param_salary = $telefono;
            $param_categoria = $mensaje;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: contacto.php");
                exit();
            } else{
                echo "Ha Ocurrido Un Error. Intenta Más Tarde.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   
                </div>
                <div class="col-md-4">
                    <div class="icon">
                       <a href="#"><i class="fa fa-facebook"></i></a>
                       <a href="#"><i class="fa fa-twitter"></i></a>
                       <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="a-right">
                        <a href="/Tienda/login.php"><p><span><i class="fa fa-user"></i></span>Iniciar Sesión</p></a>
                        <a href="/Tienda/registrarse.php"><p><span><i class="fa fa-pencil"></i></span>Registrarse</p></a>
                   </div>
                </div>
            </div>
        </div>
    </section>
        <div class="clear"></div>
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="/Tienda/index.php">
                                <h2>TSO</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="/Tienda/index.php">INICIO</a></li>
                      <li><a href="/Tienda/nosotros.php">NOSOTROS</a></li>
                      <li><a href="/Tienda/contacto.php">CONTACTO</a></li>
                      <li><a href="/Tienda/noticias.php">NOTICIAS</a></li>
                      <li><a href="/Tienda/productos.php">PRODUCTOS</a></li>
                    </ul>
                </div>
                <li class="nav-item active">
                    <a class="fa fa-cart-arrow-down" href="productos/mostrarCarrito.php">carrito &#36;&nbsp;&nbsp; (
                        <?php
                         echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    
                    ?> )</a>
                </li>
                </div>

            </div>
        </section>
    </header>

    <!-- contacto -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact">
                        <h2>Detalles Del Contacto</h2>
                        <div class="col-md-6">
                            <div class="contact_icon">
                                <div class="icon">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </div>
                                <div class="c_text">
                                    <p>Buscanos En Facebook Como:</p>
                                    <a href="">Tso_Facebook</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact_icon">
                                <div class="icon">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </div>
                                <div class="c_text">
                                    <p>Buscanos En Twitter Como:</p>
                                    <a href="">Tso_Twitter</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact_icon">
                                <div class="icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="c_text">
                                    <p>Envianos Un Correo a:</p>
                                    <p>tso@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="get_in_touch">
                        <h2>Contactanos!</h2>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <p>Tu Nombre</p>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>  

                        <div class="form-group <?php echo (!empty($correo_err)) ? 'has-error' : ''; ?>">
                            <p>Tu Correo</p>
                            <input type="email" name="correo" class="form-control" value="<?php echo $correo; ?>">
                            <span class="help-block"><?php echo $correo_err;?></span>
                        </div> 

                        <div class="form-group <?php echo (!empty($telefono_err)) ? 'has-error' : ''; ?>">
                            <p>Tu Numero De Telefono</p>
                            <input type="text" name="telefono" class="form-control" value="<?php echo $telefono; ?>">
                            <span class="help-block"><?php echo $telefono_err;?></span>
                        </div>  

                        <div class="form-group <?php echo (!empty($mensaje_err)) ? 'has-error' : ''; ?>"> 
                            <p>Tu Mensaje</p>
                            <textarea name="mensaje" class="form-control"><?php echo $mensaje; ?></textarea>
                            <span class="help-block"><?php echo $mensaje_err;?></span>
                            
                        </div>    

                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Productos</h2>
                    <a href="#">
                        <p><i class="fa fa-circle" aria-hidden="true"></i>No Se</p>
                    </a>
                    <a href="#">
                        <p><i class="fa fa-circle" aria-hidden="true"></i>Aun Sigo sin saber</p>
                    </a>
                    <a href="#">
                        <p><i class="fa fa-circle" aria-hidden="true"></i>Como es la vida todavia no se</p>
                    </a>
                </div>

                <div class="col-md-4">
                    <div class="footer-contact">
                        <h2>Contacto</h2>
                        <a href="#">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Moravia , Medellín</p>
                        </a>
                        <a href="#">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>+57 301 279 53 91</p>
                        </a>
                        <a href="#">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i>tso@gmail.com</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="footer_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copy_txt">
                        <p>Copyright © 2020 Diseñado por <span>Los Mongolines</span></p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer_logo">
                        <img src="img/master-card.png">
                        <img src="img/paypal.png">
                        <img src="img/visa.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/active.js"></script>
</body>

</html>