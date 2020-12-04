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
</header>
<section class="slider">
    <img src="../img/slider-about.jpg" alt="Slider">
    <h3>Nosotros</h3>
</section>
<div align="center">
    <section class="team">
        <div class="clear"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        Conocer al Equipo</h2>
                </div>
            </div>
            <div align="center">
                <div class="row" align="center">
                    <div class="col-md-3">
                        <div class="teams">
                            <img class="imagen" src="../img/gollum.jpg">
                            <div class="icon">
                                <a href="https://www.facebook.com/joseleoneljimenezbaena"><i class="fa fa-facebook"></i></a>
                                <a href="https://mobile.twitter.com/leonelbaena"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <h3><strong>Jose Jimenez</strong></h3>
                        <p>El Coste</p>
                    </div>


                    <div class="col-md-3">
                        <div class="teams">
                            <img src="../img/fox.jpg">
                            <div class="icon">
                                <a href="https://www.facebook.com/steve.fox.1481169"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/lexado_istivi/?hl=es-la"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <h3><strong>Steve Fox</strong></h3>
                        <p>El Mongolin</p>
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
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>  
<script src="js/active.js"></script>  
</body>
</html>