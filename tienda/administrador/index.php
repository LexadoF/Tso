<?php 
//abrimos la sesión
session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['administrador'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("location:../index.php"); 
}
$user=$_SESSION['administrador'];

$sql="SELECT * FROM administrador where id=$user";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
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
                    <li><a href="">Hola <?php echo $user ?></a></li>
                        <li><a href="/Tienda/administrador/gestion.php">Gestion</a></li>
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
                        <a href="/Tienda/administrador/cerrar.php"><p><span><i class="fa fa-pencil"></i></span>Cerrar Sesión</p></a>
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
                    <a href="/Tienda/administrador/index.php"><h2>TSO</h2></a>
                   </div>
                </div>
                <div class="col-md-7">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="/Tienda/administrador/index.php">INICIO</a></li>
                      <li><a href="/Tienda/administrador/nosotros.php">NOSOTROS</a></li>
                      <li><a href="/Tienda/administrador/contacto.php">CONTACTO</a></li>
                      <li><a href="/Tienda/administrador/productos.php">PRODUCTOS</a></li>
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
<section class="blog_slider">
   <div class="blog_overlay"></div>
    <img src="img/blog-slider.jpg" alt="Blog Slider">
    <h2>Inicio</h2>
</section>
<section class="blog-slide-text">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <div class="b-slide-text">
               <div class="row">
                    <div class="col-md-5">
                        <div class="b-slide">
                            <img src="img/blog-slide-1.jpg">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="b-text">
                            <h2> BloodBorne </h2>
                       <h4>jajajaja</h4>
                       <a href="#" class="read-more">Ver Más</a>
                        </div>
                    </div>
                </div>
               </div>
            </div>
            <div class="col-md-3">
                <div class="blog-sidebar">
                               <h2>Nuevos Productos</h2>
                        <div class="resent-post">
                            <div class="resent-post-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="../img/gow.jpg" alt="">
                                        <div class="text text-center">
                                            <a href=""><h3>God Of War</h3></a>
                                            <p>$100.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resent-post-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="../img/dark.jpg" alt="">
                                        <div class="text">
                                        <a href=""><h3>Dark Souls</h3></a>
                                            <p>$100.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resent-post-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="../img/demons.png" alt="">
                                        <div class="text">
                                        <a href=""><h3>Demon's Souls</h3></a>
                                            <p>$100.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="blog-sidebar">
                           <h2>Categorias</h2>
                    <div class="categorie">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Accion</p>
                                <p>Aventura</p>
                                <p>Rpg</p>
                                <p>Fps</p>
                                <p>Lol?</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="centre">
                            <ul class="pagination pagination-lg">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
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