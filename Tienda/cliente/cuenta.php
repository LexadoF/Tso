<?php 
//abrimos la sesión
session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['cliente'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("location:../index.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li><a href="/Tienda/cliente/cuenta.php">Cuenta</a></li>
                    </ul>
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
                        <a href="/Tienda/cliente/cerrar.php"><p><span><i class="fa fa-pencil"></i></span>Cerrar Sesión</p></a>
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
                    <a href="/Tienda/cliente/index.php"><h2>TSO</h2></a>
                   </div>
                </div>
                <div class="col-md-7">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="/Tienda/cliente/index.php">INICIO</a></li>
                      <li><a href="/Tienda/cliente/nosotros.php">NOSOTROS</a></li>
                      <li><a href="/Tienda/cliente/contacto.php">CONTACTO</a></li>
                      <li><a href="/Tienda/cliente/productos.php">PRODUCTOS</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="cart">
                        <p><i class="fa fa-cart-arrow-down"></i><sup>0</sup> &#36;&nbsp;&nbsp;0.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
</header>
<!-- formulario -->

<footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>INFORMATION</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                </div>
                <div class="col-md-4 center">
                    <h2>INFORMATION</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                </div>
                <div class="col-md-4">
                    <div class="footer-contact">
                        <h2>CONTACT US</h2>
                        <a href="#"><p><i class="fa fa-map-marker" aria-hidden="true"></i>Rangpur , Bangladesh</p></a>
                        <a href="#"><p><i class="fa fa-phone" aria-hidden="true"></i>+88 01761070282</p></a>
                        <a href="#"><p><i class="fa fa-envelope" aria-hidden="true"></i>sshahriar458@gmail.com</p></a>
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
                        <p>Copyright © 2014  Designed by <span>shawon</span></p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer_logo">
                        <img src="img/fedex.png">
                        <img src="img/master-card.png">
                        <img src="img/paypal.png">
                        <img src="img/visa.png">
                        <img src="img/american-express.png">
                        <img src="img/dhl.png">
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