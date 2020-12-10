<?php 

    require("./conexion/bd.php");

    if(isset($_POST['registrar'])){
        $documento = trim($_POST['documento']);
        $name = trim($_POST['name']);
        $telefono = trim($_POST['telefono']);
        $direccion = trim($_POST['direccion']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z-0-9])[a-zA-Z-0-9]{6,16}$/', $password))
            {
                // echo "szs";
                $_SESSION['mensaje'] = "La contraseña debe tener al entre 6 y 16 caracteres
                <br>
                Debe contener un caracter numerico";
                $_SESSION['tipo_mensaje'] = "danger";
                // header("Location: registroAdm.php");
            }else{
                $consulta = "INSERT INTO cliente(documento, name, telefono, direccion, email, password) VALUES 
                ('$documento','$name','$telefono','$direccion','$email','$password')";
                $resultado = mysqli_query($conn,$consulta);
                if($resultado){
                    $_SESSION['mensaje'] = "Se ha registrado exitosamente";
                    $_SESSION['tipo_mensaje'] = "info";
                    header("Location: login.php");
            }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
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
                    <div class="col-md-2">
                        <div class="cart">
                        <a href="/Tienda/productos/mostrarCarrito.php"><i class="fa fa-cart-arrow-down"></i><sup>0</sup> &#36;&nbsp;&nbsp;0.00</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- Login -->
    <div class="container" align="center">
    <section class="contact-us">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
            </div>
                <div class="col-md-4 col-md-offset">
                    <div class="get_in_touch">
                    <h2>Registrate</h2>
                    <form action="registrarse.php" method="POST">
                    <?php 
                    if(isset($_SESSION['mensaje'])){ ?>
                    <center><div style = "width: 400px;" class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['mensaje'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                            </div></center>
                    <?php session_unset(); } ?>
                    <div class="form-group">
                        <label for="documento">Documento</label>
                        <br>
                        <input name="documento" type="text" placeholder="Documento" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <br>
                        <input name="name" type="text" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <br>
                        <input name="direccion" type="text" placeholder="Direccion" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <br>
                        <input name="telefono" type="text" placeholder="Telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <br>
                        <input name="email" type="text" placeholder="Correo" required>
                    </div>
                    <div class="form-group">
                        <label form="password">Contraseña</label>
                        <br>
                        <input name="password"  type="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="registrar" value="Aceptar" >
                    <div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://web.whatsapp.com/send?hola?phone=+573004577639" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/active.js"></script>
</body>

</html>